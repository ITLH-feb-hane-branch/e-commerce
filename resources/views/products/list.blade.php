{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
	<table class="table table-hover">
<header>product</header>
	<tr>
		<th>id</th>
		<th>category_id</th>
		<th>model_id</th>
		<th>material_id</th>
		<th>name</th>
		<th>image 1</th>
		<th>image 2</th>
		<th>image 3</th>
		<th>description</th>
		<th>price</th>
		<th>quantity</th>
		<th>action</th>
	</tr>
	
	<tr>
	@foreach($product as $data)
		<td>{{$data->id}}</td>
		<td>{{$data->category_id}}</td>
		<td>{{$data->model_id}}</td>
		<td>{{$data->material_id}}</td>
		<td>{{$data->name}}</td>
		<td>{{$data->image_1}}</td>
		<td>{{$data->image_2}}</td>
		<td>{{$data->image_3}}</td>
		<td>{{$data->description}}</td>
		<td>{{$data->price}}</td>
		<td>{{$data->quantity}}</td>
		<td><a href="edit/{{$data->id}}">edit</a><a href="#">view</a><a href="#">delete</a></td>
	</tr>
	@endforeach
</table>

<table class="table table-hover">
<header>model</header>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>action</th>
	</tr>
	<tr>
	@foreach($model as $data)
		<td>{{$data->id}}</td>
		<td>{{$data->name}}</td>
		<td><a href="edit/{{$data->id}}">view</a><a href="#">edit</a><a href="#">delete</a></td>
	</tr>
	@endforeach
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
