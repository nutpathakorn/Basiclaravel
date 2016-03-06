<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('resources/assets/css/bootstrap.min.css')}}">
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
    	<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="#">Title</a>
    		</div>
    
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse navbar-ex1-collapse">
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="#">Link</a></li>
    				<li><a href="#">Link</a></li>
    			</ul>
    			<form class="navbar-form navbar-left" role="search">
    				<div class="form-group">
    					<input type="text" class="form-control" placeholder="Search">
    				</div>
    				<button type="submit" class="btn btn-default">Submit</button>
    			</form>
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="#">Link</a></li>
    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
    					<ul class="dropdown-menu">
    						<li><a href="#">Action</a></li>
    						<li><a href="#">Another action</a></li>
    						<li><a href="#">Something else here</a></li>
    						<li><a href="#">Separated link</a></li>
    					</ul>
    				</li>
    			</ul>
    		</div><!-- /.navbar-collapse -->
    	</div>
    </nav>
        
        <script src="{{URL::asset('resources/assets/js/jquery-2.2.1.min.js')}}"></script>
        <script src="{{URL::asset('resources/assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>