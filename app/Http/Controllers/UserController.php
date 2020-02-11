<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //1.LIST
    public function UserList(){
        $searchValue=null;
        $users = User::where("status",1)->orderBy("id","asc")
            ->paginate(10);
        return view("back_end.user.user_list",compact("users","searchValue"));
    }

    //2. CREATE
    //2.1 Hiển thị form
    public function UserCreate(){
        return view("back_end.user.user_create");
    }

    //2.2.save dữ liệu vào database
    public function UserSave(Request $request){
        $this->validate($request,[
            "name" => "required|min:3|max:100|unique:users",
            "email"=>"required|email|unique:users",
            "password" => "required|min:3|max:100",
            "repeatPassword" =>"required_with:password|same:password|min:3|max:100"
        ]);

        //Tao new
        User::create([
            "name"=>$request->get("name"),
            "password"=>$request->get("password"),
            "email"=>$request->get("email"),
        ])->save();

        return redirect("back/")->with("message","Add new user successfully");
    }

    //3.EDIT
    public function UserEdit(Request $request){
        $user = User::find($request->get("id")); //chi tim dc theo id, tra ve 1 gia tri, ko phai 1 mang
        if($user){
            return view("back_end.user.user_edit",compact("user"));
        }
        else{
            echo "User does not exit!";
        }
    }

    public function UserUpdate(Request $request){
        $user = User::find($request->get("id"));

        $this->validate($request,[
            "name" => "required|min:3|max:100|unique:users,name,".$request->get("id").",id",
            "email"=>"required|email|unique:users,email,".$request->get("id").",id",
            "password" => "required|min:3|max:100"
        ]);

        $user = User::find($request->get("id"));
        if($user){
            $user->update([
                "name"=>$request->get("name"),
                "password"=>$request->get("password"),
                "email"=>$request->get("email"),
                "level"=> $request->get("level"),
                "status"=> $request->get("status")
            ]);

            return redirect("back/user")->with("message","Update successfully");
        }else{
            return "User not found";
        }
    }

    //4. SEARCH
    public function UserSearch(Request $request){
        $searchValue =$request->get("searchValue");
        return redirect("back/user/search?searchValue=".$searchValue);
    }

    public function UserSearchResult(Request $request){
        $searchValue=$request->get("searchValue");

        $users=[];
        $users = User::where ('name', 'LIKE', '%' . $searchValue . '%')->get();
        $quantity= count($users);

        $users = User::where ('name', 'LIKE', '%' . $searchValue . '%')
            ->paginate(10);

        return view ( "back_end.user.user_search",compact("searchValue","users","quantity") );

    }

    //4. DELETE
    public function UserDelete($id){ //product_id la bien khai bao tai routes/web
        $user = User::find($id);
        if($user){
            $user->update([
                "status"=> 0
            ]);
            return redirect("back/user")->with("message","Delete successfully");
        }
        return "User not found";
    }


    //CHECK LOGIN
    public function getLogin() {
        return view('back_end.auth.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:3|max:100"
        ]);

        $email = $request->get('email');
        $password = $request->get('password');

        $myUser = User::where('email', $email)->first();

        if (is_null($myUser) == false) {
            if($myUser->status==1){
                if ($myUser->password == $password) {
                    if(!isset($_SESSION)) { session_start();}
//                    session_start();
                    $_SESSION["user_id"] = $myUser->id;
                    $_SESSION["user_name"] = $myUser->name;
                    $_SESSION["user_level"] = $myUser->level;
                    return redirect("back");
                } else {
                    return redirect("back/login")->with("message", "Login Failure!");
                }
            }else{
                return redirect("back/login")->with("message", "Account Inactive!");
            }
        } else {
            return redirect("back/login")->with("message", "Login Failure!");
        }
    }

    public function getLogout(){
        if(!isset($_SESSION)) { session_start();}

        unset($_SESSION["user_id"]);
        unset($_SESSION["user_name"]);
        unset($_SESSION["user_level"]);

        return redirect("back");
    }

    public function userError(){
        return view("back_end.user.user_error");
    }
}
