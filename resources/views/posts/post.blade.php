@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')

        <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">
<a class="btn btn-primary" href="/forum">Go back </a>
<br><br>
<h1>{{$post->title}}</h1>
<p>{!!$post->post_description!!}</p>
<br>
<form class="form-horizontal" method="POST" action="{{ route('create_post_comment') }}">
    {{ csrf_field() }}
    <label for="body" class="control-label">Comments</label>

    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
       
        
        <textarea id="comment" name="comment" class="posttext" style="height:90px;" placeholder="Enter description" required autofocus></textarea> 

            @if ($errors->has('comment'))
                <span class="help-block">
                    <strong>{{ $errors->first('comment') }}</strong>
                </span>
            @endif
        </div>
   <input type="number" style="display:none" name="postid" id="postid" value="{{ $post->post_id }}">
    <div class="form-group">
       
            <button type="submit" class="btn btn-primary">
                Post
            </button>
       
    </div>

</form>
@if(count($postcomments) > 0)
<div class = "well">
    <div class="row">
        <div class="col-md-8 col-xs-8">
            @foreach($postcomments as $comment)
                <p>{{$comment->user_comment}}</p><br>
                <small>{{$comment->user->name}} on {{$comment->created_at}}</small>
            @endforeach
        </div>       
    </div>     
</div>
@endif
</div></div>
@endsection()