<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\women;

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
        $currentUser = $auth->user();
        $womanUser = women::where('email' ,'=' , $currentUser->email)->first();
        if($currentUser->usertype == "woman")
            if($womanUser == null)
                return redirect("women_details");
            else
                return redirect("women_home");
        else
        return view('home');
    }
}
