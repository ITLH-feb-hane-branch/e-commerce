@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('adminlte_js')
    @yield('js')
@section('content_header')
  <h1>Create a new User </h1><br>
 
  <form action="/admin/users/store" method="POST">
<div class="container">
  <div class="form-group">
    <label>Role Id</label>
    <select>
  <option value="1">User</option>
  <option value="0">Admin</option>
</select>
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="John" required>
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Lennon" required>
  </div>
  <div class="form-group">
    <label>Mobile_no</label>
    <input type="" class="form-control" name="contact_no" placeholder="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="johnlennon@gmail.com" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="" required>
  </div>

  <div class="form-group">
    <label>Status</label>
     <input type="checkbox" name="status" value="1">Active 
    </div>
  
   <input type="Submit" name="Submit">
</div>
	{{csrf_field()}}
		{{method_field('PUT')}}

 </form>
@stop

@stop
