<div class="modal fade" id="{{ $project->slug }}" tabindex="-1" role="dialog" aria-labelledby="{{ $project->slug }}">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">{{ $project->name }}</h4>

			</div>

			<div class="modal-body">

				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="project-details">

						<h4>Project Details</h4>

						{!! $project->description !!}

					</div>
				</div>

{{--
				<div class="row">

					<div class="col-md-6">
					<!-- <button class="btn btn-success" role="button"> -->
						<a target="_blank" class="btn btn-success" href="{{ $project->location }}">Visit {{ $project->name }}</a>
					<!-- </button> -->
					</div>

				</div>

			</div>
--}}
			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>
