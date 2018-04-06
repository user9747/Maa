@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('orgnav')
     <div class="col-md-6 postarea col-sm-8 col-xs-8" >
<h1 class="panel-heading">Create Meetup</h1>
<form class="form-horizontal" method="POST" action="{{ route('create_meetup') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-md-4 control-label">Name of Meetup</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control posttext" name="title" placeholder="Enter Meetup title" value="{{ old('title') }}" required autofocus>

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="col-md-4 control-label">Event Description</label>

        <div class="col-md-6">
        <textarea id="body" class="posttext" name="body" rows="3" cols="70" placeholder="Enter description" required autofocus></textarea>

            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('venue') ? ' has-error' : '' }}">
        <label for="venue" class="col-md-4 control-label">Venue</label>

        <div class="col-md-6">
            <input id="venue" type="text" class="form-control posttext" name="venue" placeholder="Enter Venue " value="{{ old('venue') }}" required autofocus>

            @if ($errors->has('venue'))
                <span class="help-block">
                    <strong>{{ $errors->first('venue') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
        <label for="date" class="col-md-4 control-label">Date</label>

        <div class="col-md-6">
        <input type="date" id="date"  name="date"  placeholder="Enter Date" required autofocus></input>

            @if ($errors->has('date'))
                <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
        <label for="time" class="col-md-4 control-label">Time</label>

        <div class="col-md-6">
        <input type="time" id="time"  name="time" step="1"  placeholder="Enter Time" required autofocus></input>

            @if ($errors->has('time'))
                <span class="help-block">
                    <strong>{{ $errors->first('time') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Create
            </button>
        </div>
    </div>

</form></div><div class="col-md-3">
     <img src="{{URL::to('img/meet.png')}}" class="img-responsive yogapic">
</div></div>
@endsection()
