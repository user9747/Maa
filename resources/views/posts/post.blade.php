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
<h4>Add comment section here</h4>
</div></div>
@endsection()