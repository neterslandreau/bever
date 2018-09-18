@extends('layouts.app')

@section ('content')
<div class="container">
	<div class="col-sm-8 blog-main">

	<h1>Create Configurable</h1>

		<hr>

		@include ('layouts.errors')
		<form method="post" action="/configurables" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>

			<div class="form-group">
				<label for="name">Type</label>
				<input type="text" class="form-control" id="type" name="type">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>

	</div>
</div>

@endsection