@extends('master')

@section('title', 'Renegade')

@section('content')
<link rel='stylesheet' href={{URL::to('src/css/welcome.css')}}>

<div class="row">
	<div class="col-md-12">
		<img src={{URL::to('src/img/logo.jpeg')}} class="img-responsive" align="center">
		<h1>Renegade</h1>
		<a href="signup">  <button type="button" class="bton">Sign Up</button></a><br>
		<a href="signin">  <button type="button" class="bton">Sign In</button></a>
	</div>
</div>

@endsection
