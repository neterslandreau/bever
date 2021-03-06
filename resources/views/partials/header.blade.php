<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-text">
					<span class="skills">Fully Bonded, Insured, & Licensed!</span>
					<hr class="star-light">
				</div>
				@php $img = Image::make(Storage::disk('local')->get('public/icons/site-logo.png')); @endphp
				<img class="img-rounded img-responsive" alt="Main Image" src="{{ config('app.site-logo', 'https://via.placeholder.com/450x250/000000') }}" title=" {{ config('app.company-name', 'Company Name') }}">
				<div class="intro-text">
					<span class="name">{{ config('app.company-name', 'Company Name') }}</span>
					<hr class="star-light">
					<span class="skills">{!! config('app.tag-line', 'Things we focus on') !!}</span>
				</div>
			</div>
		</div>
	</div>
</header>
