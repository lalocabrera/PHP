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
    					<h1>Full Name</h1>
							<p class="navbar-text">What's on your mind?</p>
  							<textarea class="form-control" rows="3" style="width: 350px; float: left;"></textarea>
  							<button type="post" class="btn btn-default pull-right">Post</button>
  					</div>

  					<div class="comment-box-posting">
  						<img src="http://placehold.it/40x40" alt="..." class="img-thumbnail">
							<div class="paragraph-comment-box">
  								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae fugiat, sed pariatur ab quaerat sit, nam voluptate hic laudantium nihil est eveniet saepe distinctio consequuntur fugit aliquid voluptatem minima soluta?</p>
									<a href="#"><p class="reply-comment-btn">reply</p></a>				
  							</div>		
  					</div>

  					<div class="comment-box-reply">
  						<img src="http://placehold.it/40x40" alt="..." class="img-thumbnail">
							<div class="paragraph-comment-reply">
  								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae fugiat, sed pariatur ab quaerat sit, nam voluptate hic laudantium nihil est eveniet saepe distinctio consequuntur fugit aliquid voluptatem minima soluta?</p>
									<a href="#"><p class="reply-comment-btn">reply</p></a>				
  							</div>		
  					</div>
					
					
  				



    		</div>
				
			<div class="pure-u-1-24">
				
  			</div>
			
    		
		</div>
    			
@stop