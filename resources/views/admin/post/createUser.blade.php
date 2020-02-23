@extends('master')

@section('title')
 addUser
@endsection

@section('content')

<div class="about"> 
<h2> Crate New User  </h2>


     <form action="{{route('post.store')}}"  method="POST" > 
              @csrf

              <input type="text" name="username" required="" placeholder="your name" /><br/>
              <input type="email" name="email"  required="" placeholder="your email" />  <br/>

              <input type="submit" value="Crate" />        
     
      </form>  
	
       
</div>
@endsection