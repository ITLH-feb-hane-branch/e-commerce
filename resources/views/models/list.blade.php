{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


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
		<td><a href="edit/{{$data->id}}">edit</a><a href="#">view</a><a href="delete/{{$data->id}}">delete</a></td>
	</tr>


	@endforeach
</table>
<button><a href="create">create</a></button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
