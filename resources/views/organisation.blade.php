
@extends('layouts.app')
@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
   
     @include('orgnav')
    
       <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">


             <div class="row">
                <div class="col-md-3">
           
            </div>
               <div class="col-md-6">
             <div class="cardo">
               

                <p>{{Auth::user()->name}}</p>
             </div>
            </div>
        </div>
               
        

        </div>
    </div>
</div>
@endsection