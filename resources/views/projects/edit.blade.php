@extends('layouts.app')


@section ('content')
<?php 
	$project->description = htmlentities($project->description);
	// dd($project->description);
?>

<div class="container">
	<div class="col-sm-8">

		@include ('layouts.errors')
		<form method="post" action="/projects/{{ $project->slug }}/edit" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
			</div>

            <div class="form-group">
                <label for="image">Image</label>
                @if (Storage::disk('local')->exists('public/icons/' . $project->slug . '.png'))

                    <img class="img-rounded" src="/img/small/{{ $project->slug }}.png" height="125">

                @endif
                <input type="file" id="image" name="image" class="form-control">


			<div class="form-group">
				<label for="name">Location</label>
				<input type="text" class="form-control" id="location" name="location" value="{{ $project->location }}">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="10" id="description" name="description" class="form-control">{{ $project->description }}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>

	</div>
</div>
@endsection