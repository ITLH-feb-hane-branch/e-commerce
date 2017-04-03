@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>Edit User Details</h1><br>

	<form action="/users/update/{{$update->id}}" method="post">
		{{csrf_field()}}
		{{method_field('PUT')}}
		First name:<input type="text" value="{{$update->first_name}}" name="first_name"></input>
		
		Last name:<input type="text" value="{{$update->last_name}}" name="last_name"></input>
		
		Mobile No:<input type="text" value="{{$update->contact_no}}" name="mobile_no"></input>
		
		email:<input type="text" value="{{$update->email}}" name="email"></input>

		password:<input type="password" value="{{$update->password}}" name="password"></input>
		
		<input type="submit" value="Update">
		
		</form>

@stop
