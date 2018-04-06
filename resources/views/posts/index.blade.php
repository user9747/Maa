@extends('layouts.app')

@section('content')

<link rel='stylesheet' href={{URL::to('css/posts.css')}} >
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<div class="container postc">
    <div class="row">
     @include('navwoman')

        <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">
            <a class="btn btn-primary" style="float:right;" href="/forum/create">Add Post</a>
        <h1 class="forh">Forum</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <div class="row"><div class="col-md-1"><img src={{URL::to('img/org.png')}} style="height:20px;"></div><div class="col-md-9">{{$post->user->name}}</div> </div>
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