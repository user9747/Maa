@extends('master')

@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/style1.css')}}>



<div class="container-fluid">
    <div class="jumbotron text-center">
		<img src="{{ asset('img/maalogo.png') }}" class="img-responsive logop">
        <h4 class="apptitle">Project Maa.</h4>
		
		<a href="signup">  <button type="button" class="bton">Sign Up</button></a><br>
		<a href="signin">  <button type="button" class="bton">Sign In</button></a>
	</div>
</div>


@endsection
