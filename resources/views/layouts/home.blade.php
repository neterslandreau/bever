<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ config('app.description', 'Free Web tutorials') }}">
	<meta name="keywords" content="{{ config('app.keywords', 'HTML,CSS,XML,JavaScript') }}">


	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">

	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
	</script>
</head>
<body id="">
	<div id="app">

		@include('partials.navbar-freelancer')

		@include('partials.header')

		@include('partials.contact')

		@include('partials.about')

		@include('partials.portfolio')

	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
