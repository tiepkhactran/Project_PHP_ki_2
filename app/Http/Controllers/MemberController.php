<?php

namespace App\Http\Controllers;
use App\Member;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    //1.LIST
    public function MemberList(){
        $searchValue=null;
        $members = Member::where("status",1)->orderBy("member_id","asc")
            ->paginate(10);
        return view("back_end.member.member_list",compact("members","searchValue"));
    }

    //2. CREATE
    //2.1 Hiển thị form
    public function MemberCreate(){
        return view("back_end.member.member_create");
    }

    //2.2.save dữ liệu vào database
    public function MemberSave(Request $request){
        $this->validate($request,[
            "member_name" => "required|min:3|max:100|unique:members",
            "email"=>"required|email|unique:members",
            "password"=>"password",
//            "gender"=>"required",
//            "birthday"=>"required",
            "avatar"=>"required",
            "password" => "required|min:3|max:100",
            "repeatPassword" =>"required_with:password|same:password|min:3|max:100"
        ]);

        //Luu anh vao public va tao url
        $url= null;
        if ($request->hasFile("avatar")){
            $file= $request->file("avatar");
            $picture_name= time().$file->getClientOriginalName();
            $file->move("upload",$picture_name);
            $url = "/upload/".$picture_name;
        };

        //Tao new
        Member::create([
            "member_name"=>$request->get("member_name"),
            "password"=>$request->get("password"),
            "email"=>$request->get("email"),
            "phoneNumber"=>$request->get("phoneNumber"),
            "gender"=>$request->get("gender"),
            "birthday"=>$request->get("birthday"),
            "avatar"=>$url,
        ])->save();

        return redirect("back/member")->with("message","Add new member successfully");
    }

    //3.EDIT
    public function MemberEdit(Request $request){
        $member = Member::find($request->get("member_id")); //chi tim dc theo id, tra ve 1 gia tri, ko phai 1 mang
        if($member){
            return view("back_end.member.member_edit",compact("member"));
        }
        else{
            echo "Member does not exit!";
        }
    }

    public function MemberUpdate(Request $request){
        $member = Member::find($request->get("member_id"));
        $oldPicture= $member->avatar;

        $url= null;
        if ($request->hasFile("avatar")){
            $file= $request->file("avatar");
            $picture_name= time().$file->getClientOriginalName();
            $file->move("upload",$picture_name);
            $url = "/upload/".$picture_name;
        }
        else{
            $url= $oldPicture;
        };

        $this->validate($request,[
            "member_name" => "required|min:3|max:100|unique:members,member_name,".$request->get("member_id").",member_id",
            "email"=>"required|email|unique:members,email,".$request->get("member_id").",member_id",
//            "gender"=>"required",
//            "birthday"=>"required",
            "password" => "required|min:3|max:100"
        ]);

        $member = Member::find($request->get("member_id"));
        if($member){
            $member->update([
                "member_name"=>$request->get("member_name"),
                "password"=>$request->get("password"),
                "email"=>$request->get("email"),
                "gender"=>$request->get("gender"),
                "birthday"=>$request->get("birthday"),
                "avatar"=>$url,
                "status"=> $request->get("status")
            ]);

            return redirect("back/member")->with("message","Update successfully");
        }else{
            return "Member not found";
        }
    }

    //4. SEARCH
    public function MemberSearch(Request $request){
        $searchValue =$request->get("searchValue");
        return redirect("back/member/search?searchValue=".$searchValue);
    }

    public function MemberSearchResult(Request $request){
        $searchValue=$request->get("searchValue");

        $members=[];
        $members = Member::where ('member_name', 'LIKE', '%' . $searchValue . '%')->get();
        $quantity= count($members);

        $members = Member::where ('member_name', 'LIKE', '%' . $searchValue . '%')
            ->paginate(10);

        return view ( "back_end.member.member_search",compact("searchValue","members","quantity") );

    }

    //4. DELETE
    public function MemberDelete($member_id)
    { //product_id la bien khai bao tai routes/web
        $member = Member::find($member_id);
        if ($member) {
            $member->update([
                "status" => 0
            ]);
            return redirect("back/member")->with("message", "Delete successfully");
        }
        return "Member not found";
    }


    //2. DANG KY THANH VIEN FRONT_END
    //2.1 Hiển thị form
    public function MemberRegisterCreate(){
        return view("front_end.registration.Registration");
    }

    //2.2.save dữ liệu vào database
    public function MemberRegisterSave(Request $request){
        $this->validate($request,[
            "member_name" => "required|min:3|max:100|unique:members",
            "email"=>"required|email|unique:members",
            "password"=>"password",
//            "gender"=>"required",
//            "birthday"=>"required",
            "avatar"=>"required",
            "password" => "required|min:3|max:100",
            "repeatPassword" =>"required_with:password|same:password|min:3|max:100"
        ]);

        //Luu anh vao public va tao url
        $url= null;
        if ($request->hasFile("avatar")){
            $file= $request->file("avatar");
            $picture_name= time().$file->getClientOriginalName();
            $file->move("upload",$picture_name);
            $url = "/upload/".$picture_name;
        };

        //Tao new
        Member::create([
            "member_name"=>$request->get("member_name"),
            "password"=>$request->get("password"),
            "email"=>$request->get("email"),
            "phoneNumber"=>$request->get("phoneNumber"),
//            "gender"=>$request->get("gender"),
//            "birthday"=>$request->get("birthday"),
            "avatar"=>$url,
        ])->save();

        session_start();
        $_SESSION["member_name"]=$request->get("member_name");

        return redirect("front/home")->with("message","Add new member successfully");

    }


    //2. LOGIN FRONT_END
    //2.1 Hiển thị form
    public function MemberGetLogin(){
        return view('front_end.Login.login');
    }

    //2.2.
    public function MemberPostLogin(Request $request){
        $email= $request->get("email");
        $password=$request->get("password");

        $myMember = Member::where('email',$email)->first();

        if (is_null($myMember)==false){
            if($myMember->status==1){
                if($myMember->password == $password){
                    session_start();
                    $_SESSION["member_id"] = $myMember->member_id;
                    $_SESSION["member_name"] = $myMember->member_name;
                    return redirect("front/home");
                }else{
                    return redirect("front/login")->with("message","Login Failure!");
                }
            }else{
                return redirect("front/login")->with("message","Account Inactive");
            }
        }else{
            return redirect("front/login")->with("message","Login Failure!");
        }
    }

    public function MemberGetLogout(){
        if(!isset($_SESSION)) { session_start();}

        unset($_SESSION["member_id"]);
        unset($_SESSION["member_name"]);

        return redirect("front/home");
    }

}
