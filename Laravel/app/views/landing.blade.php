@extends('layouts.master')

@section('content')
  <style>
    body {
      background-image: url('http://myclone.files.wordpress.com/2011/05/machinetop_background.jpg');
      color: #fff; 
    }
  </style>
	<div class="pure-g">
    	<div class="pure-u-16-24"></div>
    		
    		<div class="pure-u-7-24">
        		<form role="form" method="POST" action="/login">
          			<div class="form-group">
            			<label for="email">Email address</label>
            			<input type="email" class="form-control" id="loginemail" name="email" placeholder="Enter email">
          			</div>
  
            		<div class="form-group">
              			<label for="password">Password</label>
              			<input type="password" class="form-control" id="loginpassword" name="password" placeholder="Password">
            		</div>
            		<div class="checkbox">
    					<label>
      						<input type="checkbox"> remember me
      						<button type="button" class="btn-link">Forgot Password?</button>
    					</label>
  					</div>
            			<button type="submit" class="btn btn-default">Sign In</button>	
        		</form>

            @if (Session::get('login'))
              <div class="alert alert-warning" role="alert">{{{ Session::get('login') }}}</div>
            @endif
    		</div>
    			<div class="pure-u-1-24"></div>
	</div>
  
    


	<div class="pure-g">
    	<div class="pure-u-16-24"></div>
    	<div class="pure-u-7-24">
    		<form role="form" method="post" action="/register" role="form">
          		<div class="form-group">
            		<label for="full_name_reg">Full Name</label>
            		<input type="text" class="form-control" id="registerfullname" name="full_name" placeholder="Enter Full Name">
            		
            		<label for="enterEmail">Email address</label>
            		<input type="email" class="form-control" id="registeremail" name="email" placeholder="Enter Email">

            		<label for="Password">Password</label>
            		<input type="password" class="form-control" id="registerpassword" name="password" placeholder="Enter Password">
          		</div>
            	
            	<button type="submit" class="btn btn-warning pull-right">Sign Up</button>   
        	</form>
            @if (Session::get('register'))
              <div class="alert alert-warning" role="alert">{{{ Session::get('register') }}}</div>
            @endif

    	</div>
    
    	<div class="pure-u-1-24"></div>
	</div>
@stop