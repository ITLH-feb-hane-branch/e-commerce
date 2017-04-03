@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>User Details</h1><br>


<table class="table table-hover">
<tr>
<th>id</th>
<th>role_id</th>
<th>first name</th>
<th>last name</th>
<th>email ID</th>
<th>password</th>
<th>status</th>
<th>contact number</th>
<th>created_at</th>
<th>modified_at</th>
<th>Actions</th>
</tr>
@foreach($view_details as $find)
<tr>
<td>{{$find->id}}</td>
@if($find->role_id === 0)
<td>Admin</td>
@else
<td>User</td>
@endif
<td>{{$find->first_name}}</td>
<td>{{$find->last_name}}</td>
<td>{{$find->email}}</td>
<td>{{$find->password}}</td>
@if($find->status === 1)
<td>Active</td>
@else
<td>Inactive</td>
@endif
<td>{{$find->contact_no}}</td>
<td>{{$find->created_at}}</td>
<td>{{$find->updated_at}}</td>
<td><a href="users/edit/{{$find->id}}">edit</a>|<a href="delete/{{$find->id}}">delete</a></td>
</tr>
@endforeach
</table>
<a href="users/create">Create New User</a><br>
@if(Session :: has('update'))
	{{Session :: get('update')}}
@endif
@if(Session :: has('insert'))
	{{Session :: get('insert')}}
@endif
@stop