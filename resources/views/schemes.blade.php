@extends('layouts.app')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
     @include('navwoman')
        <div class="col-md-7 col-md-offset-2" >
        <h1>Scheme</h1>
            @if(count($schemes) > 0)
                @foreach($schemes as $scheme)
                    <div class = "well">
                        <div class="row">
                            <div class="col-md-8 col-xs-8">
                                <h1><a href="/scheme/{{$scheme->id}}">{{$scheme->title}}</a></h1>
                                <small>Created on {{$scheme->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $schemes->links() }}
            @else
                <p>No schemes found</p>
            @endif
        </div>
    </div>
</div>
@endsection
