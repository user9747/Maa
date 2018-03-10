@extends('layouts.app')

@section('content')

<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')

        <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">
            <a class="btn btn-success" href="/forum/create">Add Post</a>
        <h1 class="forh">Forum</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <h1 class="poss"><a href="/forum/{{$post->post_id}}">{{$post->title}}</a></h1>
                                <small>Created on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>       
                        </div>     
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No posts found</p>
            @endif 
        </div>
    </div>
</div>
@endsection