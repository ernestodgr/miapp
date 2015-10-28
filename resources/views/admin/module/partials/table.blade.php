<table class="table table-striped">
	<tr align="center">
		<td>Module</td>
		<td>Created at</td>
		<td></td>
	</tr>
	@foreach ($modules as $module)
	<tr align="center">
		<td>{{$module->name}}</td>
		<td>{{$module->created_at}}</td>		
		<td>
			<p style="display: inherit;">
				<a class="btn btn-info" href="{{ route('admin.module.edit', $module->id) }}">Edit</a>
				<a class="btn btn-info" href="{{ route('admin.module.show', $module->id) }}" role="Delete">Delete</a>
				<a class="btn btn-info" href="{{ url('admin/module/showpermission', $module->id) }}">Permisos</a>
			</p>
		</td>
	</tr>
	@endforeach
</table>
