<?php

namespace App\Http\Controllers;

use App\Donate;
use App\Member;
use App\Cause;
use Illuminate\Http\Request;

class DonaterController extends Controller
{
    //1.LIST
    public function DonaterList(){
        $donaters = Donate::paginate(10);
        return view("back_end.donater.donater_list",compact("donaters"));
    }

    //2. CREATE
    //2.1 Hiển thị form
    public function DonaterCreate(){
        $causes= Cause::select(["cause_id","cause_name"])->get();
        $members= Member::select(["member_id","member_name"])->get();
        return view("back_end.donater.donater_create",compact("causes","members"));
    }

    //2.2.save dữ liệu vào database
    public function DonaterSave(Request $request){
        //validate
        $this->validate($request,[
            "cause_id" => "required",
            "member_id" => "required",
            "donater_money"=>"required",
        ]);

        $member= Member::find($request->get("member_id"));
        $member_name= $member->member_name;

        //Tao new
        Donate::create([
            "cause_id"=>$request->get("cause_id"),
            "member_id"=>$request->member_id,
            "member_name"=>$member_name,
            "donater_money"=>$request->get("donater_money"),
            "created_at"=>$date = date('Y-m-d H:i:s'),
            "updated_at"=>$date = date('Y-m-d H:i:s'),
        ])->save();

        return redirect("back/donater")->with("message","Add new donater successfully");
    }

    //3.EDIT
    public function DonaterEdit(Request $request){
        $causes= Cause::select(["cause_id","cause_name"])->get();
        $members= Member::select(["member_id","member_name"])->get();
        $donater = Donate::find($request->get("donater_id")); //chi tim dc theo id, tra ve 1 gia tri, ko phai 1 mang
        if($donater){
            return view("back_end.donater.donater_edit",compact("donater","causes","members"));
        }
        else{
            echo "Donater does not exit!";
        }
    }

    public function DonaterUpdate(Request $request){
        $donater = Donate::find($request->get("donater_id"));

        $this->validate($request,[
            "cause_id" => "required",
            "member_id" => "required",
            "donater_money"=>"required",
        ]);

        $member= Member::find($request->get("member_id"));
        $member_name= $member->member_name;
        dump($request->get("donater_id"));
        dump($donater);
        if($donater){
            $donater->update([
                "cause_id"=>$request->get("cause_id"),
                "member_id"=>$request->member_id,
                "member_name"=>$member_name,
                "donater_money"=>$request->get("donater_money"),
                "created_at"=>$date = date('Y-m-d H:i:s'),
                "updated_at"=>$date = date('Y-m-d H:i:s'),
            ]);

            return redirect("back/member")->with("message","Update successfully");
        }else{
            return "Donater not found";
        }
    }

//    //4. SEARCH
//    public function DonaterSearch(Request $request){
//        $searchValue =$request->get("searchValue");
//        return redirect("back/member/search?searchValue=".$searchValue);
//    }
//
//    public function DonaterSearchResult(Request $request){
//        $searchValue=$request->get("searchValue");
//
//        $members=[];
//        $members = Member::where ('member_name', 'LIKE', '%' . $searchValue . '%')->get();
//        $quantity= count($members);
//
//        $members = Member::where ('member_name', 'LIKE', '%' . $searchValue . '%')
//            ->paginate(10);
//
//        return view ( "back_end.member.member_search",compact("searchValue","members","quantity") );
//
//    }
//
//    //4. DELETE
//    public function DonaterDelete($member_id)
//    { //product_id la bien khai bao tai routes/web
//        $member = Member::find($member_id);
//        if ($member) {
//            $member->update([
//                "status" => 0
//            ]);
//            return redirect("back/member")->with("message", "Delete successfully");
//        }
//        return "Member not found";
//    }


}
