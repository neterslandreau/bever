<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<td>Name</td>
			<td>Value</td>
			<td>Type</td>
			<td colspan=2></td>
		</tr>
	</thead>
	<tbody>

	@foreach ($configurables as $configurable)

		<tr>
			<td>{{ $configurable->name }}</td>
			<td>{{ $configurable->value }}</td>
			<td>{{ $configurable->type }}</td>
            <td><a class="glyphicon glyphicon-pencil nav-link" href="/configurables/{{ $configurable->slug }}/edit" role="button"><span></span></a></td>
            <td><a class="glyphicon glyphicon-trash nav-link" href="/configurables/{{ $configurable->slug }}/delete" role="button"><span></span></a></td>
		</tr>

	@endforeach

		<tr>
			<td colspan=5 align=center>
				<a class="glyphicon glyphicon-plus nav-link" href="/configurables/create" role="button"><span>Add</span></a>
			</td>
		</tr>

	</tbody>

</table>
