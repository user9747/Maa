<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\women;
use App\weekmsg;

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
        if(($days->days<=252) && ($days->days > 84)){
          $stage=1;
          $rate = 30;
        }
        elseif (($days->days <= 84) && ($days->days >28))
        {
          $stage = 2;
          $rate = 15;
        }
        else {
          $stage = 3;
          $rate = 7;
        }

        $woman->rate = $rate;
        $woman->save();
        return redirect("wdashboard");
    }

    public function dashboard(){
        $woman = women::where('email','=',Auth::user()->email)->first();
        // $week = weekmsg::all();

        $week = weekmsg::where('week','=',40-(int)($woman->days/7))->first();
        return view("women_dashboard")->with('woman',$woman)->with('week',$week);
    }
}