<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countU = DB::table("users")->count();
        $countC = DB::table("cars")->count();
        $countR = DB::table("transactions")->where('status','=','Lunas')->count();
        $saldo =  DB::table("balances")->get()->max("balance");
         if(Auth::user()->role == "admin"){
            return view('dashboard.homeadmin',compact('saldo','countU','countR','countC'));
         }else{
             return view('dashboard.homeuser'); 
         }  
    }
}
