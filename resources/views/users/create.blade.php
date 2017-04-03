@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>Create a new User </h1><br>
 
  <form action="/users/store" method="POST">
  <div>
  <div class="form-group">
    <label>Role Id</label>
    <input type="text" class="form-control" name="role_id" placeholder="0 or 1">
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Mobile_no</label>
    <input type="" class="form-control" name="contact_no" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control" name="status" placeholder="1 or 0">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="johnlennon@gmail.com">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="">
  </div>
  
   <input type="Submit" name="Submit">
	</div>
	{{csrf_field()}}
		{{method_field('PUT')}}
 </form>
@stop