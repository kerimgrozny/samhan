<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- following are bootstrap lins -->
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="#">WebSiteName</a>
	    	</div>
	    	<div>
	      		<ul class="nav navbar-nav">
	        		<li class="active"><a href="#">Home</a></li>
	        		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
	          			<ul class="dropdown-menu">
	            			<li><a href="#">Page 1-1</a></li>
	            			<li><a href="#">Page 1-2</a></li>
	            			<li><a href="#">Page 1-3</a></li>
	          			</ul>
	        		</li>
	        		<li><a href="#">Page 2</a></li>
	        		<li><a href="#">Page 3</a></li>
	      		</ul>
	     		<ul class="nav navbar-nav navbar-right">
	        		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      		</ul>
	    	</div>
	    </div>
	</nav> 
	<div class="container">
	  	<div class="jumbotron">
	    	<h1>My first Bootstrap website!</h1>      
	    	<p>This page will grow as we add more and more components from Bootstrap...</p>      
	    	<a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
	    </div>
	  	<div class="row">
	    	<div class="col-md-3">
	        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    	</div>
		    <div class="col-md-3"> 
		      	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div class="col-md-3"> 
		      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div class="col-md-3">
		      	<ul class="nav nav-pills nav-stacked">
		        	<li class="active"><a href="#">Home</a></li>
		        	<li class="dropdown">
		          	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Submenu 1-1</a></li>
				            <li><a href="#">Submenu 1-2</a></li>
				            <li><a href="#">Submenu 1-3</a></li>                        
			          	</ul>
		       		</li>
			        <li><a href="#">Menu 2</a></li>
			        <li><a href="#">Menu 3</a></li>
		      	</ul>
		    </div>
		    <div class="clearfix visible-lg"></div>
	  	</div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
	  	<div class="container-fluid">
	    </div>
	</nav> 
</body>
</html>
