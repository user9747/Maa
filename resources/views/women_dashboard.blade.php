
@extends('layouts.app')
@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
    @if(Auth::user()->usertype == "woman")
     @include('navwoman')
     @elseif(auth()->user->usertype == "org")

     @else

     @endif
       <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8">


             <div class="row">
                <div class="col-md-3">
             <div class="cardo">
          
                    You're on<br> your week
                    <h3 class="theday">{{ (int)((280-$woman->days)/7 + 1) }}</h3>
                </div>
            </div>
               <div class="col-md-6">
             <div class="cardo">
                @if($week){
              <p>{{ $week->body }}</p>  
                 }
                 @endif
             </div>
            </div>
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