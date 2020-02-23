@extends('master')

@section('title')
 posts
@endsection

@section('content')

<div width=100%; class="about"> 
<h2>User List || <a href="{{route('post.create')}}">Crate New User </a> </h2>

         <table width=100%;  >

        <tr>
                <th>userID</th>
                <th>Name</th>
                <th>Email</th>
                <th style="float:right" >Action</th>
                <th></th>

        </tr> 

    @foreach($data as $row)

        <tr>
        
               <td>{{$row->id}}</td>
               <td>{{$row->username}}</td>
               <td>{{$row->email}}</td>
               <td>
                    <button style="padding:5px;border-radius:5px; cursor:pointer;float:right;" type="submit" > <a style="text-decoration:none;font-size:16px;" href="{{route('post.show',$row->id)}}">Show</a> </button> 
                     
                  <button style="padding:5px;border-radius:5px; cursor:pointer;float:right;" type="submit" >  <a style="text-decoration:none;font-size:16px;"  href="{{route('post.edit',$row->id)}}">Edit</a>   </button>  


               </td>

               <td>
               
                    <form action="{{route('post.destroy',$row->id)}}" method="POST" onsubmit="return confirm('Are you sure to Delete')" > 
                            @csrf
                            @method('DELETE')
                            <button style="padding:5px;border-radius:5px; cursor:pointer;float:right;" type="submit"> Delete </button> 
                     </form>
               
               </td>
                            

        </tr>

    @endforeach

         </table>
	
       
</div>
@endsection