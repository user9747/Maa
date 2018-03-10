@extends('layouts.app')

@section('content')
<a class="btn btn-primary" href="/forum">Go back </a>
<br><br>
<h1>{{$meetup->title}}</h1>
<p>{!!$meetup->body!!}</p>
<p>{{$meetup->time}}</p>
<p>{{$meetup->date}}</p>
<p>{{$meetup->venue}}</p>


<br>
@endsection
