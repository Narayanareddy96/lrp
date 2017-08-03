<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personelids;
use Auth;
use DateTime;

class GeneralInfoController extends Controller
{
    //
    public function __construct(){
      //  $this->middleware('auth');
      // auth will be handeled in router or here based on programming style we can use
      // better use in router so that it can be apply for all common files
    }

    public function index(){
      // if any thing in general we can use this function
    }

    public function personaldata(){
     return view('generalinfo.personaldata');
    }

    public function personaldata_insert(Request $request){
      if($request){
        $personal = new personelids();
        $personal->user_id = Auth::user()->id;
        $personal->from_date = DateTime::createFromFormat('d/m/Y', $request->ValidFromDate)->format('Y-m-d');
        $personal->to_date = DateTime::createFromFormat('d/m/Y', $request->ValidToDate)->format('Y-m-d');
        $personal->id_type = $request->IDType;
        $personal->country = $request->Country;
        $personal->id_number = $request->IDNo;
        $personal->region = $request->Region;
        $personal->place_of_issue = $request->PlaceOfIssue;
        $personal->issue_authority = $request->IssueingAuthority;
        $personal->save();
        if($personal){
          return redirect('personaldata');
        }
      }
    }

}
