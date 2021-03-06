<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\women;
use App\scheme;
use App\advice;
use Illuminate\Support\Facades\Auth;

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
        $currentUser = Auth::user();
        $womanUser = women::where('email' ,'=' , $currentUser->email)->first();
        if($currentUser->usertype == "woman")
            if($womanUser == null)
                return redirect("women_details");
            else
                return redirect("wdashboard");
        elseif ($currentUser->usertype == "org") {
           return redirect("orgdashboard");
        }
        elseif($currentUser->usertype == "doctor"){
          return redirect("doctordashboard");
        }
        else
        return view('home');
    }
    public function org()
    {
        return view('organisation');
    }
     public function doctor()
    {
        return view('doctordashboard');
    }
    public function live(){
        return view('live');
    }
    public function advice(){
        $dos = advice::where('flag','=',0)->get();
        $donts = advice::where('flag','=',1)->get();
        return view('advice')->with('dos',$dos)->with('donts',$donts);
    }

}
