@extends('layouts.app')

@section('title', 'Project Maa')
@section('content')
<link rel='stylesheet' href={{URL::to('css/loginreg.css')}}>
<div class="container">
    <div class="row box">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fill in</div>
                 <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/mom3.png') }}" class="img-responsive mrmm">
                    </div>
                <div class="col-md-8">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('women_update') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('pregno') ? ' has-error' : '' }}">
                            <label for="pregno" class="col-md-4 control-label">No. of children you've had</label>

                            <div class="col-md-6">
                                <input id="pregno" type="text" class="form-control" name="pregno" value="{{ old('pregno') }}" required autofocus>

                                @if ($errors->has('pregno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pregno') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <label for="date_of_birth" class="col-md-4 control-label"> Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>
                                @if ($errors->has('date_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                            <label for="due_date" class="col-md-4 control-label"> Delivery Due Date</label>

                            <div class="col-md-6">
                                <input id="due_date" type="date" class="form-control" name="due_date" value="{{ old('due_date') }}" required autofocus>
                                @if ($errors->has('due_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('due_date') }}</strong>
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