
@extends('layouts.app')
@section('title', 'Project Maa')

@section('content')
<link rel='stylesheet' href={{URL::to('css/posts.css')}}>
<div class="container postc">
    <div class="row">
   
     @include('navwoman')
    
       <div class="col-md-8 col-md-offset-1 postarea col-sm-8 col-xs-8 cardo">


             <div class="row">
               
               <div class="col-md-12">
                
         
                    Your baby is of the size of a {{$week->size}}!
                     <img src="img/{{$week->image}}" height="40px">
                   <hr> 
               </div>
               

            <div class="col-md-12">
             
                    You're on<br> week &nbsp
                    <span class="theday">{{ (int)((280-$woman->days)/7 + 1) }} </span>&nbsp|&nbsp
                        <!--</h3>
                <h3 class="theday1">--> <span class="theday">{{ $woman->days }}</span>&nbsp days to go
                 
             
            </div>

            </div>
            <hr>
            <div class="row">
                 <div class="col-md-12">
            
                <h3 class="theday2">Advice for the week</h3>
              <p>{{ $week->body }}</p>  
                
            
            </div></div>

          

            <div class="row">
            
            <div class="col-md-3">

             <div class="btn btn-primary live" ><a href="/live">Live Talks</a></div>
             <div class="btn btn-primary advice"><a href="/advice">Advice</a></div>
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
           </ul> 

        </div>-->
    </div>
    <div>
        <a href="/sos" class="float">
        <img src="img/sos.png" style="height:40px; margin-top:10px;">
        </a>
    </div>

</div>
@endsection