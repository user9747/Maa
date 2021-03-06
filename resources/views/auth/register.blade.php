@extends('layouts.app')

@section('content')
<link href="{{ asset('css/loginreg.css') }}" rel="stylesheet">
<div class="container">
    <div class="row box">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                 <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/mom2.png') }}" class="img-responsive mrmm">
                    </div>
                <div class="col-md-8">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usertype') ? ' has-error' : '' }}">
                            <label for="usertype" class="col-md-4 control-label">Who are you?</label>

                            <div class="col-md-6">
                                <input id="usertype" type="radio" class="la" name="usertype" value="woman" required autofocus>&nbsp Woman<br/>
                                <input id="usertype" type="radio" class="la" name="usertype" value="org" required autofocus>&nbsp Organisation<br />
                                <input id="usertype" type="radio" class="la" name="usertype" value="doctor" required autofocus>&nbsp Doctor<br />

                                @if ($errors->has('usertype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usertype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phnumber') ? ' has-error' : '' }}">
                            <label for="phnumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phnumber" type="text" class="form-control" name="phnumber" value="{{ old('phnumber') }}" required autofocus>

                                @if ($errors->has('phnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phnumber') }}</strong>
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
                </div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection
