@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>listing</title>
</head>
<body>
<h3>listing of Material</h3>
	<table class="table table-hover">
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
		</tr>
		@foreach($material as $data)
		<tr>
		<td>{{$data -> id}}</td>
		<td>{{$data -> name}}</td>
		<td><a href = "edit/{{$data -> id}}">Edit</a>
			<a href = "list">View</a>
			<a href = "delete/{{$data -> id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
	<a href="create">Create</a><br>

	@if(Session :: has('update'))
			{{Session :: get('update')}}
		@endif
	@if(Session :: has('create'))
			{{Session :: get('create')}}
	@endif
	@if(Session :: has('delete'))
			{{Session :: get('delete')}}
	@endif
</body>
</html>
@endsection