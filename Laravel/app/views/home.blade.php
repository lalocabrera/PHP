@extends('layouts.master')

@section('content')
	<style>
		body {
			background-color: #fff;
		}
	</style>
	<div class="pure-g">
    	<div class="pure-u-4-24">
    		<div class="pure-menu pure-menu-open">
    			<a class="pure-menu-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;User Name</a>
					<ul>
        				<li><a href="#">My Profile</a></li>
        				<li><a href="#">Private Message</a></li>
        				<li><a href="/">Logout</a></li>
    				</ul>

    				<ul class="tweets">
    					<li><a href="#"><p class="navbar-text">Tweets | 55</p></a></li>
        				<li><a href="#"><p class="navbar-text">Followers | 100</p></a></li>
        				<li><a href="#"><p class="navbar-text">Following | 200</p></a></li>
        			</ul>
    				
    				<a class="pure-menu-heading2"></a>
    		</div>
    	</div>
    		
    		<div class="pure-u-1-24"></div>

    			<div class="pure-u-13-24">
    				<div class="img-box">
    					<img src="http://placehold.it/168x168" alt="..." class="img-rounded">
    				</div>

    				<div class="comment-box">
						
    					<h1>{{{ $first_name }}}</h1>
							<p class="navbar-text">What's on your mind?</p>
							<form method="post" action="/message">
  								<textarea class="form-control" name="body" rows="3" style="width: 350px; float: left;"></textarea>
  								<button type="submit" class="btn btn-default pull-right">Post</button>
							</form>
  					</div>

  					<div class="comment-box-posting">
							@foreach ($messages as $message)
							<div class="media">
   								<a class="pull-left" href="#">
      								<img class="media-object" src="http://placehold.it/68x68" alt="Media Object">
   								</a>
   									<div class="media-body">
      									<h4 class="media-heading">{{ $message->user->full_name }}</h4>
				      						{{ $message->body }}
   									</div>
   									<form method="post" action="/message/delete/{{ $message->id }}">
   										<button type="submit" class="btn btn-danger">Delete</button>
									</form>

							</div>
									@endforeach				
  							</div>
  							@stop		
  					</div>
  					
	
  					</div>
					
					
  				



    		</div>
				
			<div class="pure-u-1-24">
				
  			</div>
			
    		
		</div>
    			
@stop