<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Storage\Facades\Auth;
use App\women;

class WomenController extends Controller
{
    //
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
        $woman->email = Auth::user()->email;
        $woman->due_date = $request['due_date'];
        $woman->date_of_birth = $request['date_of_birth'];
        $woman->flag = 0;
        $woman->preg_no = $request['pregno'];
        $days = date_diff($woman->due_date,date("Y-m-d"));
        $women->days = $days;

    }
}
