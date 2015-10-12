<div class="form-group">
	<label class="col-md-4 control-label">First Name</label>
	<div class="col-md-6">
		{!! Form::text('first_name',null, ['class'=>'form-control','placeholder' => 'First Name']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">Last Name</label>
	<div class="col-md-6">
		{!! Form::text('last_name',null, ['class'=>'form-control','placeholder' => 'Last Name']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">User Name</label>
	<div class="col-md-6">
		{!! Form::text('username',null, ['class'=>'form-control','placeholder' => 'Username']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">E-Mail Address</label>
	<div class="col-md-6">
		{!! Form::text('email',null, ['class'=>'form-control','placeholder' => 'Email']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">Rol</label>
	<div class="col-md-6">
		{!!Form::select('role', $roles, null, ['placeholder' => 'Select a role','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">Password</label>
	<div class="col-md-6">
		<input type="password" class="form-control" name="password">
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label">Confirm Password</label>
	<div class="col-md-6">
		<input type="password" class="form-control" name="password_confirmation">
	</div>
</div>
