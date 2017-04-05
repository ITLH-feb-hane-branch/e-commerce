@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EDIT CATEGORIES</title>
</head>
<body>
	<h3 class="box-title">Edit Categories:{{$category->id}}</h3>
	<div class="box box-info">
		<form class = "box-body form-group" method="POST" action="/category/update/{{$category->id}}">
			Name:<input type="text" value="{{$category->name}}" class="form-control" name="name" placeholder="Enter name"><br>
			@if($category->status === 1)
			Status: <input type="checkbox" checked name="status"><br>
			@else
			Status:<input type="checkbox" name="status"><br>
			@endif
			Created at:<input type="date" value="{{$category->created_at}}" name="created_at"><br>
			Modified at:<input type="date" value="{{$category->updated_at}}" name="modified_at"><br>
			<input type="submit" value="update" name="update" ><br>
			{{csrf_field()}}
			{{method_field('PUT')}}
		</form>
	</div>
</body>
</html>
@endsection