@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<div class="container postc">
    <div class="row">
     @include('orgnav')
     <div class="col-md-6 postarea col-sm-8 col-xs-8" >
       
<h1 class="panel-heading">
Create Scheme</h1>
<form class="form-horizontal" method="POST" action="{{ route('create_scheme') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="col-md-4 control-label">Name of Scheme</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control posttext" name="title" placeholder="Enter Scheme title" value="{{ old('title') }}" required autofocus>

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label for="body" class="col-md-4 control-label">Description</label>

        <div class="col-md-6">
        <textarea id="body" class="posttext" name="body" rows="5" cols="70" placeholder="Enter description" required autofocus></textarea>

            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
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

</form></div></div></div>
@endsection()
