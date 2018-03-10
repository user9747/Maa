@extends('layouts.app')

@section('content')
<a class="btn btn-primary" href="/reminder">Go back </a>
<br><br>
<h1>{{$reminder->title}}</h1>
<p>{!!$reminder->body!!}</p>
<p> Remind me at {{$reminder->time}} everyday </p>
<br>
@endsection()