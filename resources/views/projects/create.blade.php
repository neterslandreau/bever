@extends('layouts.app')

@section ('content')
<div class="container">
	<div class="col-sm-8 blog-main">

	<h1>Create Project</h1>

		<hr>

		@include ('layouts.errors')
		<form method="post" action="/projects" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>

			<div class="form-group">
				<label for="image">Icon</label>
				<input type="file" id="image" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Location</label>
				<input type="text" class="form-control" id="location" name="location">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="10" id="description" name="description" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>

	</div>
</div>

@endsection