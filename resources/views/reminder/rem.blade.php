@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')

        <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">
<a class="btn btn-primary" href="/reminder">Go back </a>
<br><br>
<div class="cardo"><br>
<h1>{{$reminder->title}}</h1>
<p>{!!$reminder->body!!}</p>
<p> Remind me at {{$reminder->time}} everyday </p>
<br></div></div></div></div>
@endsection()