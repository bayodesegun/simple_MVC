<!DOCTYPE html> 
<html> 
	<head> 
	<title><?php echo formatTitle($title)?></title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
	 <link rel="stylesheet" href="assets/css/style.css" />
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
</head> 
<body> 

<nav class="navbar navbar-default">
	<div class = "container">				 
		<div class="navbar-header">
			  			  		  
		  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false"> 
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		  </button>
		 <a class="navbar-brand" href="/">MVC App</a>
			 
		</div>
							
		<div id="main-nav" class="navbar-collapse collapse" aria-expanded="false">
		  
			<ul class="nav navbar-nav">
				<li role=""><a href="/list" id="about" >List Items</a></li>
				<li role=""><a href="/add" id="about" >Add Items</a></li>
			</ul>
		</div>
	</div>			
</nav>
		