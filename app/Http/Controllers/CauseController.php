<?php

namespace App\Http\Controllers;

use App\Donate;
use Illuminate\Http\Request;
use App\Cause;

class CauseController extends Controller
{
    //1.LIST
    public function CauseList(){
        $causes = Cause::paginate(10);
        return view("back_end.cause.cause_list",compact("causes"));
    }

    public function CauseGetDetail(Request $request){
        $cause_id= $request->get("cause_id");
        $cause = Cause::find($cause_id);

        $donaters= Donate::where("cause_id",$cause_id)->paginate(10);
        return view("back_end.cause.cause_detail",compact("donaters","cause"));
    }


}
