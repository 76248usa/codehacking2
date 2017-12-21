@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>

<div class="row">

<div class="col-sm-3">
	@if($user->photo)
		<img width="150" src="http://localhost:8888/codehacking2/public/images/{{$user->photo->file}}" alt="" class="img-responsive img-circle">
	@else
		<img height="100" src="http://placehold.it/400x400">
	@endif
</div>
<div class="col-sm-9">

{!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=> true]) !!}

<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password:') !!}
	{!! Form::password('password', ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('is_active', 'Status:') !!}
	{!! Form::select('is_active',array(1 => 'active', 0 => 'not active') ,null ,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('role_id', 'Role:') !!}
	{!! Form::select('role_id',array(''=>'choose options')+ $roles, null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('photo_id', 'Photo:') !!}
	{!! Form::file('photo_id', ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Update User', ['class'=>'btn btn-primary'])!!}
</div>

{!! Form::close() !!}
</div>

</div>

<div class="row">
	@include('includes.form_error')
</div>




@stop