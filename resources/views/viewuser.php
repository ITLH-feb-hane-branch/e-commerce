@extends('layout')


<table border=5 cellpadding=10>
<tr>
<th>id</th>
<th>first name</th>
<th>last name</th>
<th>email ID</th>
<th>password</th>
<th>status</th>
<th>contact number</th>
<th>created on</th>
<th>created by</th>
<th>modified on</th>
<th>modified by</th>
<th>Actions</th>
</tr>
@foreach($users as $users)
<tr>
<td>{{$users->id}}</td>
<td>{{$users->first_name}}</td>
<td>{{$users->last_name}}</td>
<td>{{$users->email}}</td>
<td>{{$users->password}}</td>
<td>{{$users->status}}</td>
<td>{{$users->mobile_no}}</td>
<td>{{$users->created_at}}</td>
<td>{{$users->created_by}}</td>
<td>{{$users->updated_at}}</td>
<td>{{$users->updated_by}}</td>
<td><a href="edit/{{$users->id}}">edit</a>&nbsp;<a href="view/{{$users->id}}">view</a>&nbsp;<a href="delete/{{$users->id}}">delete</a></td>
</tr>
@endforeach

</table>
