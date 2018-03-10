<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;


class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $posts = post::orderby('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }
    public function show($id)
    {
        $post = post::where('post_id','=',$id)->first();
        return view('posts.post')->with('post',$post);
    }
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = new post;
        $post->title = $request->input('title');
        $post->post_description = $request->input('body');
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('/forum')->with('success','Post Created');

    }
}
