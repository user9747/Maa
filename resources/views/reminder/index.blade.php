@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <a class="btn btn-success" href="/reminder/create">Add Reminder</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Reminders</h1>
            @if(count($reminders) > 0)
                @foreach($reminders as $reminder)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <h1><a href="/reminder/{{$reminder->id}}">{{$reminder->title}}</a></h1>
                                <small>Created on {{$reminder->created_at}} by {{$reminder->user->name}}</small>
                            </div>       
                        </div>     
                    </div>
                @endforeach
            @else
                <p>No reminders found</p>
            @endif 
        </div>
    </div>
</div>
@endsection