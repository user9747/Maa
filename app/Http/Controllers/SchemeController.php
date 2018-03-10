<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\women;
use App\scheme;
use Illuminate\Support\Facades\Auth;


class SchemeController extends Controller
{
    //
    public function scheme(){
      $schemes = scheme::orderBy('created_at','desc')->paginate(10);
      return view('schemes')->with('schemes',$schemes);
    }
    public function store(Request $request){
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
      ]);
      $scheme = new scheme;
      $scheme->title = $request->title;
      $scheme->data = $request->body;
      $scheme->save();

      return redirect('/scheme')->with('success','scheme Created');
    }
    public function show($scheme_id){
      $scheme = scheme::where('id','=',$scheme_id)->first();
      return view('scheme.index')->with('scheme',$scheme);
    }
}
