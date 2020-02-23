<!DOCTYPE html>
<html>
<head>
	<title>learning laravel/@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/style.css')}}">
</head>

<body>
	<div class="headersection templete clear">
		<div class="logo">
		
			<h2>Website Title</h2>
		
		</div>
		<div class="social clear">
			
			<div class="searchbtn clear">
			<form action="" method="post">
				<input type="text" name="keyword" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
    </div>
        
	<div class="navsection templete">     
			<ul>
		<li><a href="home">Home</a></li>
		<li><a href="post">post</a></li>	
		<li><a id="active" href="contact">Contact</a></li>
	</ul>
	</div>

	<div class="contentsection contemplete clear">
	
		<div class="maincontent clear">
		
		<!--displaying for codes error results -->

            @if(count($errors) > 0)
                       
					   <ul>
					   
					         @foreach($errors->all() as $error){
                                  <li> {{ $error }} </li>
							 }
					         @endforeach
					   </ul>

			@endif

            
			@if(Session::has('success'))
                  <p>{{Session::get('success')}} </p>
            @endif



			@if(Session::has('warning'))
                  <p>{{Session::get('warning')}} </p>
            @endif


            @yield('content')


		</div>
		
	</div>


	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <p>&copy; Copyright Training with live project.</p>
	</div>
	<div class="fixedicon clear">
	
	</div>
</body>
</html>