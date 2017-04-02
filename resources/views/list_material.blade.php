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
		<td>{{$data->id}}</td>
		<td>{{$data->name}}</td>
		<td><a href="edit_material/{{$data->id}}">Edit</a>
			<a href="#">View</a>
			<a href="#">Delete</a></td>
		</tr>
		@endforeach
	</table>
	<a href="create_material">Create</a><br>

	@if(Session::has('update'))
			{{Session::get('update')}}
		@endif
</body>
</html>
@endsection