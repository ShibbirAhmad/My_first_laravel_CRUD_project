@extends('master')

@section('title')
 posts
@endsection

@section('content')

<div class="about"> 
<h2>Definate Post Displaying according to id</h2>

        <h3>
        
             ID:{{$data->id}} </br>
             username:{{$data->username}} </br>
             email:{{$data->email}} </br>
           
        </h3>

	
       
</div>
@endsection