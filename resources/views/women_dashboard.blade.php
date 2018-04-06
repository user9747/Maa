
@extends('layouts.app')
@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
   
     @include('navwoman')
    
       <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">


             <div class="row">
                <div class="col-md-3">
             <div class="cardo">
          
                    You're on<br> your week
                    <h3 class="theday">{{ (int)((280-$woman->days)/7 + 1) }}</h3>
                </div>
            </div>
               <div class="col-md-9">
             <div class="cardo" style="padding: 12px;">
                <h3 class="theday2">Advice for the week</h3>
              <p>{{ $week->body }}</p>  
                
             </div>
            </div></div><div class="row">
             <div class="col-md-3">
             <div class="cardo" style="margin-top: 20px;">
                   You have
                  <h3 class="theday1">{{ $woman->days }}</h3>to go
                 
             </div>
            </div>
            <div class="col-md-3">
             <button class="btn btn-primary live" ><a href="/live">Live Talks</a></button>
     <button class="btn btn-primary advice"><a href="/advice">Advice</a></button></div>
        </div>
               
             

<!-- <div class="container">
    
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
   
            <ul>
                <li>{{ $woman->user_id }}</li>
                <li>{{ $woman->email }}</li>
                <li>{{ $woman->days }}</li>
           </ul> -->

        </div>
    </div>

</div>
@endsection