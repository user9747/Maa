@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')

        
            <a class="btn btn-success pull-right" href="/reminder/create" style="margin-top: 20px;">Add Reminder</a>
      
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Reminders</h1>

             <div class="row">
               
            @if(count($reminders) > 0)
                @foreach($reminders as $reminder)
                 <div class="col-md-3 cardo">
                   
                                <h1><a href="/reminder/{{$reminder->id}}">{{$reminder->title}}</a></h1>
                               
                            </div>       
                       
                @endforeach
            @else
                <p>No reminders found</p>
            @endif 
        </div>
    </div>
</div>
@endsection