<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<img class="img-responsive" alt="Main Image" src="{{ env('HEADER_IMAGE', 'https://via.placeholder.com/450x250/000000') }}">
				<div class="intro-text">
					<span class="name">{{ env('BRAND', 'Company Name') }}</span>
					<hr class="star-light">
					<span class="skills">{{ env('SKILLS', 'Things we focus on') }}</span>
				</div>
			</div>
		</div>
	</div>
</header>
