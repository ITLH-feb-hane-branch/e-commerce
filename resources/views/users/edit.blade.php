@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>Edit User Details</h1><br>

	<form action="/admin/users/update/{{$update->id}}" method="post">
		{{csrf_field()}}
		{{method_field('PUT')}}

		<div class="form-group has-feedback {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <input type="text" name="first_name" class="form-control" value="{{$update->first_name}}"
                           placeholder="First Name" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    <input type="text" name="last_name" class="form-control" value="{{$update->last_name}}"
                           placeholder="Last Name" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
		<div class="form-group has-feedback {{ $errors->has('mobile_no') ? 'has-error' : '' }}">
                    <input type="text" name="mobile_no" class="form-control" value="{{$update->contact_no}}"
                           placeholder="Mobile No" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('mobile_no'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile_no') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="text" name="email" class="form-control" value="{{$update->email}}"
                           placeholder="Email-Id" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control" value="{{$update->password}}"
                           placeholder="password" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

				<input type="submit" value="Update">

		
		</form>

@stop
