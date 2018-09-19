<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<td>Name</td>
			<td>Location</td>
			<td>Description</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</thead>
	<tbody>

	@foreach ($projects as $project)

		<tr>
			<td>{{ $project->name }}</td>
			<td>{{ $project->location }}
			<td>{!! $project->description !!}</td>
			<td><a class="glyphicon glyphicon-eye-open nav-link" href="#{{ $project->slug }}" role="button" data-toggle="modal"><span></span></a></td>
            <td><a class="glyphicon glyphicon-pencil nav-link" href="/projects/{{ $project->slug }}/edit" role="button"><span></span></a></td>
            <td><a class="glyphicon glyphicon-trash nav-link" href="/projects/{{ $project->slug }}/delete" role="button"><span></span></a></td>
		</tr>

	@endforeach

		<tr>
			<td colspan=6 align=center>
				<a class="glyphicon glyphicon-plus nav-link" href="/projects/create" role="button"><span>Add</span></a>
			</td>
		</tr>

	</tbody>

</table>
