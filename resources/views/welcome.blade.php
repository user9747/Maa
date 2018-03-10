@extends('master')

@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/style1.css')}}>

<div class="row full">
    <div class="col-md-6">
        <h2 class="vent">A venture to help out<br> all the gonna-be moms.</h2>
        <p class="weldesc">Welcome to the start of your bump-tastic pregnancy journey! 
        We at Project Maa are here to help you out through all the bumps and downs.</p>
    </div>
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
