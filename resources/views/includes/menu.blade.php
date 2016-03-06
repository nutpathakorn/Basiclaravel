<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Basic Laravel</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li @section('home')@show><a href="{{URL::to('/')}}">Home</a></li>
				<li @section('about_us')@show><a href="{{URL::to('about-us')}}">About Us</a></li>
				<li @section('service')@show><a href="{{URL::to('service')}}">Service</a></li>
				<li @section('portfolio')@show><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
				<li @section('blog')@show><a href="{{URL::to('blog')}}">Blog</a></li>
				<li @section('contact')@show><a href="{{URL::to('contact')}}">Contact</a></li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div>
</nav>