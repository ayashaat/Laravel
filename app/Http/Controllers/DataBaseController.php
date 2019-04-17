<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DataBaseController extends Controller
{
    function accountsAndcountries(){
        $accounts = DB::table("account")->get();
        $items = DB::table("country")->get();
        return view("data-base.accountsAndcountries", compact("accounts","items"));  
    }
}