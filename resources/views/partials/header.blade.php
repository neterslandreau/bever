<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-responsive" alt="Main Image" src="{{ config('app.site-logo', 'https://via.placeholder.com/450x250/000000') }}" title=" {{ config('app.company-name', 'Company Name') }}">
				<div class="intro-text">
					<span class="name">{{ config('app.company-name', 'Company Name') }}</span>
					<hr class="star-light">
					<span class="skills">{!! config('app.tag-line', 'Things we focus on') !!}</span>
				</div>
			</div>
		</div>
	</div>
</header>
