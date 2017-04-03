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
@foreach($view_details as $show)
<tr>
<td>{{$show->id}}</td>
<td>{{$show->role_id}}</td>
<td>{{$show->first_name}}</td>
<td>{{$show->last_name}}</td>
<td>{{$show->email}}</td>
<td>{{$show->password}}</td>
<td>{{$show->status}}</td>
<td>{{$show->mobile_no}}</td>
<td>{{$show->created_at}}</td>
<td>{{$show->updated_at}}</td>
<td><a href="edit/{{$show->id}}">edit</a>|<a href="delete/{{$show->id}}">delete</a></td>
</tr>
@endforeach

</table>
@stop