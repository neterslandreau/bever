@extends('layouts.app')


@section ('content')

<div class="container">
	<div class="col-sm-8">

		@include ('layouts.errors')
		<form method="post" action="/configurables/{{ $configurable->slug }}/edit" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $configurable->name }}">
			</div>

			@if ($configurable->type === 'file')
            <div class="form-group">
                <label for="image">Value</label>
                @if (Storage::disk('local')->exists('public/icons/' . $configurable->slug . '.png'))

                    <img class="img-rounded" src="/img/small/{{ $configurable->slug }}.png" height="125">

                @endif
                <input type="file" id="value" name="value" class="form-control">
            </div>

            @elseif ($configurable->type === 'textarea')
            <div class="form-control">

            </div>

            @else
			<div class="form-group">
				<label for="value">Value</label>
				<input type="text" class="form-control" id="value" name="value" value="{{ $configurable->value }}">
			</div>

            @endif

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
			<input type="hidden" class="form-control" id="type" name="type" value="{{ $configurable->type }}">
		</form>

	</div>
</div>
@endsection