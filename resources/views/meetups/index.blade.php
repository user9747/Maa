@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
        @include('navwoman')

        <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">
        <h1 class="forh">Meetup</h1>
            @if(count($meetups) > 0)
                @foreach($meetups as $meetup)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <h1><a href="/meetup/{{$meetup->id}}">{{$meetup->title}}</a></h1>
                                <small>Created on {{$meetup->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            @else
                <p>No Meetups available</p>
            @endif
        </div>
    </div>
</div>
@endsection
