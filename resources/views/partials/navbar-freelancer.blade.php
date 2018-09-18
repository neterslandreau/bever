<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">

		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="/">{{ config('app.company-name', 'Company Name') }}</a>
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">

			@if(in_array(request()->server('REMOTE_ADDR'), ['127.0.0.1', '174.48.153.117', '192.168.10.10']))

				<li class="page-scroll">
					<a href="/home">admin</a>
				</li>

			@endif

				<li class="page-scroll">
					<a href="#contact">{{ config('app.contact', 'Contact') }}</a>
				</li>
				<li class="page-scroll">
					<a href="#about">{{ config('app.about', 'About') }}</a>
				</li>
				<li class="page-scroll">
					<a href="#portfolio">{{ config('app.portfolio', 'Our Work') }}</a>
				</li>
			</ul>
		</div>

	</div>

</nav>
