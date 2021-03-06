@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')
     <div class="col-md-6 postarea col-sm-8 col-xs-8" >
<h1 class="panel-heading">
Create Reminder</h1>
<form class="form-horizontal" method="POST" action="{{ route('create_reminder') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-md-4 control-label">Title</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control" name="title" placeholder="Enter post title" value="{{ old('title') }}" required autofocus>

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="col-md-4 control-label">Body</label>

        <div class="col-md-6">
        <textarea id="body" name="body" rows="10" cols="70" placeholder="Enter description" required autofocus></textarea> 

            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
        <label for="time" class="col-md-4 control-label">Remind at</label>

        <div class="col-md-6">
        <input id="time" type="time" class="form-control" name="time" step="1" required autofocus></input> 

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
                Post
            </button>
        </div>
    </div>

</form></div></div>
@endsection()