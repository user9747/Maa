@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')
     <div class="col-md-6 postarea col-sm-8 col-xs-8" >
       
<h1 class="panel-heading">Create Post</h1>
<form class="form-horizontal" method="POST" action="{{ route('create_post') }}">
    {{ csrf_field() }}
    <label for="title" class="control-label">Title</label>
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
       

        
            <input id="title" class="posttext" type="text" class="form-control" name="title" placeholder="Enter post title" value="{{ old('title') }}" required autofocus>

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        
    </div>
     <label for="body" class="control-label">Body</label>

    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
       
        
        <textarea id="body" name="body" class="posttext" style="height:90px;" placeholder="Enter description" required autofocus></textarea> 

            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
   
    <div class="form-group">
       
            <button type="submit" class="btn btn-primary">
                Post
            </button>
       
    </div>

</form></div>
<div class="col-md-3">
     <img src="{{URL::to('img/yogamom.png')}}" class="img-responsive yogapic">
</div>
@endsection()