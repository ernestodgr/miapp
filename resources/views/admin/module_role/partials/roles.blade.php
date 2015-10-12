<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<table border="1" style="width: 100%">
			<thead>
				<tr align="center">
					<td>Name</td><td>Permission</td><td>Action</td>
				</tr>
			</thead>
			@foreach ($roles as $role)
				
				<tr align="center">
					<td>{{$role->name}}</td>
					<td>
						
						<div style="display: block;">
							<ul class="list-group">
								@foreach ($role->permissions as $key=>$per)
									@if($key =='user.create')
										@if($per==true) 
											<li class="">Crear</li>
										@endif
									@endif
									@if($key =='user.update')
										@if($per==true) 
											<li class="">Actualizar</li>
										@endif
									@endif
									@if($key =='user.delete')
										@if($per==true) 
											<li class="">Eliminar</li>
										@endif
									@endif
									@if($key =='user.view')
										@if($per==true) 
											<li class="">Consultar</li>
										@endif
									@endif			
									
								@endforeach
							</ul>
						</div>
						
					</td>
					<td>
					{!!$activo = ''!!}
					@foreach ($moduleRole as $key=>$moduRole)
						@if($moduRole->role_id == $role->id)
							<?php $activo = 'checked' ?>
						@endif
					@endforeach
					<input type="checkbox" name="permissions[]" value="{{$role->id}}" {{$activo}}>
				</tr>
			@endforeach
		</table>
	</div>
</div>