@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')
<a class="btn btn-primary" href="/forum">Go back </a>
<br><br>
<h1>{{$scheme->title}}</h1>
<p>{!!$scheme->data!!}</p>
<br>
@endsection
