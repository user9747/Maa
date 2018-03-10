@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <a class="btn btn-success" href="/forum/create">Add Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Forum</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <h1><a href="/forum/{{$post->post_id}}">{{$post->title}}</a></h1>
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