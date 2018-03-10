@extends('master')

@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/style1.css')}}>

<div class="row full">
    <div class="col-md-6"></div>
    <div class="col-md-6">

<div class="container-fluid">
    <div class="jumbotron text-center">
		<img src="{{ asset('img/maalogo.png') }}" class="img-responsive logop">
        <h4 class="apptitle">Project Maa.</h4>

		<a href="login">  <button type="button" class="bton">Sign Up</button></a><br>
		<a href="register">  <button type="button" class="bton">Sign In</button></a>
	</div>
</div>
</div>
</div>


@endsection
