@extends('master')

@section('title', 'Renegade')

@section('content')
<link rel='stylesheet' href={{URL::to('src/css/welcome.css')}}>
<!doctype html>
<html>
<head>
<title>Bound Live Broadcast</title>
</head>
<body>
  <?=$htmlBody?>
</body>
</html>

@endsection