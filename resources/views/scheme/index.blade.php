@extends('layouts.app')

@section('content')
<a class="btn btn-primary" href="/forum">Go back </a>
<br><br>
<h1>{{$scheme->title}}</h1>
<p>{!!$scheme->data!!}</p>
<br>
<h1>Add comment section here</h1>
@endsection
