<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\women;

class WomenController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }

    public function update(Request $request){
        $this->validate($request, [
            'pregno' => 'required',
            'date_of_birth' => 'required',
            'due_date' => 'required'
        ]);
        
        $woman = new women;
        $user = Auth::user();
        $woman->email = $user->email;
        $woman->due_date = $request['due_date'];
        $woman->date_of_birth = $request['date_of_birth'];
        $woman->flag = 0;
        $woman->preg_no = $request['pregno'];
        $due_date = new \DateTime($request['due_date']);
        $now = new \DateTime();
        $days = date_diff($due_date, $now);
        $woman->days = $days->days;
        $woman->rate = 30;
        $woman->save();
        return redirect("wdashboard");

    }
    public function dashboard(){
        $woman = women::where('email','=',Auth::user()->email)->first();
        return view("women_dashboard")->with('woman',$woman);
    }
}
