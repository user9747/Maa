@extends('layouts.app')

@section('content')
<a class="btn btn-primary" href="/forum">Go back </a>
<br><br>
<h1>{{$post->title}}</h1>
<p>{!!$post->post_description!!}</p>
<br>
<h1>Add comment section here</h1>
@endsection()