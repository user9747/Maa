<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\women;
use App\scheme;
use App\meetup;
use Illuminate\Support\Facades\Auth;



class MeetUpController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $meetups = meetup::orderBy('created_at','desc')->paginate(10);
        return view('meetups.index')->with('meetups',$meetups);
    }
    public function show($id)
    {
        $meetups = meetup::where('id','=',$id)->first();
        return view('meetups.meetup')->with('meetup',$meetups);
    }
    public function create(){
        return view('meetups.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'date'=>'required',
            'time'=>'required',
            'venue'=>'required'
        ]);
        $meetup = new meetup;
        $meetup->title = $request['title'];
        $meetup->body = $request['body'];
        $meetup->time = $request['time'];
        $meetup->date = $request['date'];
        $meetup->venue = $request['venue'];
        $meetup->save();

        return redirect('/meetup')->with('success','MeetUp Created');

    }
}
