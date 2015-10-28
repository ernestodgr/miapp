<table class="table table-striped">
	<tr align="center">
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Usuario</td>
		<td>Email</td>
		<td>Permisos usuario</td>
		<td>Ultimo ingreso</td>
		<td>Creado</td>
		<td></td>
	</tr>
	@foreach($users as $user)
	<tr align="center">
		<td>{{ $user->first_name}}</td>
		<td>{{ $user->last_name}}</td>
		<td>{{ $user->username}}</td>
		<td>{{ $user->email }}</td>
		
		<td>
			<?php 
				$permi = $user->permissions;
				echo print_r($permi);
			?>
		</td>
		
		<td>
		<?php 
		$fecha = $user->last_login;
		$date = explode(" ",$fecha);
		//echo print_r($date);
		if($date[0]<>""){
			$newDate = date("d-m-Y", strtotime($fecha));
			echo $newDate." ".$date[1];
		}
		
		?>
		</td>
		
		
		<td>{{ $user->created_at }}</td>		
		<td>
			<div style="display: inline;"><button class="btn btn-default">Modificar</button></div>
		</td>
	</tr>
	@endforeach
</table>
