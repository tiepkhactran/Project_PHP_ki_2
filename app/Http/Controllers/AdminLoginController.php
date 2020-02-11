<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
//    public function UserLogin(Request $request){
//        $users = User::where("status",1)->get();
//
//
//        return view("back_end.user.user_list",compact("users","searchValue"));
//    }

    public function getLogin() {
        return view('back_end.auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */






}
