
@extends('layouts.app')
@section('title', 'Project Maa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-ms-offset-2">
            <ul>
                <li>{{ $woman->user_id }}</li>
                <li>{{ $woman->email }}</li>
                <li>{{ $woman->days }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
