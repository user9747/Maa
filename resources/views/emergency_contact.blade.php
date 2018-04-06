@extends('layouts.app')

@section('title', 'Project Maa')
@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<div class="container">
    <div class="row box">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Emergency Contact</div>
                 <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/mom3.png') }}" class="img-responsive mrmm">
                    </div>
                <div class="col-md-8">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('contact_update') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection