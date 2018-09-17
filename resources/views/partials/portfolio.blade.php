<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>{{ env('BRAND_NAME', 'Brand Name') }}</h2>
				<hr class="star-primary">
			</div>
		</div>

		<div class="row">
			@if (is_array($projects))
				@foreach ($projects as $project)

					@include('partials.portfolio-item')

				@endforeach
			@else
			<div class="col-sm-4 portfolio-item">

				No Projects to show at this time
			</div>
			@endif
		</div>
{{-- 
		<div class="row">

			<hr class="star-primary">
			<div class="col-md-8 col-md-offset-2">

				<h3 class="text-center">Hosting Details</h3>
				<p>Servers are hosted by Digital Ocean and managed by Laravel Forge with Envoyer.</p>
				<p>Image storage and SMTP services are provided by Amazon Web Services.</p>

			</div>

		</div>
--}}
</section>
@foreach ($projects as $project)

	@include('partials.portfolio-modal')
	
@endforeach
