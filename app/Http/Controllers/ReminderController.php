<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;
use Auth;

class ReminderController extends Controller
{
    //
    public function index(){
        $reminders = Auth::user()->reminder;
        return view('reminder.index')->with('reminders',$reminders);
    }

    public function show($id)
    {
        $reminder = Reminder::where('id','=',$id)->first();
        return view('reminder.rem')->with('reminder',$reminder);
    }
    public function create(){
        return view('reminder.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'time' => 'required',
        ]);
        $reminder = new Reminder;
        $reminder->title = $request->input('title');
        $reminder->body = $request->input('body');
        $reminder->time = $request->input('time');
        $reminder->user_id = Auth::user()->id;
        $reminder->save();

        return redirect('/reminder');

    }
}
