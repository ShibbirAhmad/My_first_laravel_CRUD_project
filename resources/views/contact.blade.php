@extends('master')

@section('content')

            

                <form action="{{url('/contact')}}"  method="POST" >
                   @csrf
                        <input type="text" name="username" placeholder="your name" /> <br/>
                        <input type="email" name="email"  placeholder="E-mail" /> <br/>
                        <input type="submit" value="submit" />
                
                
                </form>

@endsection