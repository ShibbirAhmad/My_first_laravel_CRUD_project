@extends('master')

@section('title')
 updateUser
@endsection

@section('content')

<div class="about"> 
<h2> Update User  </h2>


     <form action="{{route('post.update',$data->id)}}"  method="POST" > 
              @csrf
              @method('PUT')
              <input type="text" name="username" required="" value="{{$data->username}}" /><br/>
              <input type="email" name="email"  required="" value="{{$data->email}}" />  <br/>

              <a style="font-size:23px; text-decoration:none;background:black;color:#fff;" href="{{route('post.index')}}"> Back </a>
              
                <input style="margin-left:10px" type="submit" value="Update" />       
     
      </form> 

	
       
</div>
@endsection