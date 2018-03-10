@extends('layouts.app')

@section('content')
<h1>Do's and Don'ts</h1>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#dos">Do's</a></li>
    <li><a data-toggle="tab" href="#donts">Don'ts</a></li>
</ul>
<div class="tab-content">
    <div id="dos" class="tab-pane fade in active">
      <h3>Do's</h3>
      <ul>
      @foreach($dos as $do)
        <li>{{$do->advice}}</li>
      @endforeach()
      </ul>
    </div>
    <div id="donts" class="tab-pane fade">
    <h3>Dont's</h3>
    <ul>
    @foreach($donts as $dont)
      <li>{{$dont->advice}}</li>
    @endforeach()
    </ul>
</div>
@endsection()