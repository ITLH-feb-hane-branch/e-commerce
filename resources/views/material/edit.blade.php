@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EDIT MATERIAL</title>
</head>
<body>
	<h3 class="box-title">Edit Materials:{{$material->id}}</h3>
	<div class="box box-info">
		<form class = "box-body form-group" method="POST" action="/material/update/{{$material->id}}">
			Name:<input type="text" value="{{$material->name}}" class="form-control" name="name"><br>
			@if($material->status === 1)
			Status:<input type="checkbox" checked name="status"><br>
			@else
			Status:<input type="checkbox" name="status"><br>
			@endif
			Created at:<input type="date" value="{{$material->created_at}}" name="created_at"><br>
			Modified at:<input type="date" value="{{$material->updated_at}}" name="modified_at"><br>
			<input type="submit" value="update" name="update" ><br>
			{{csrf_field()}}
			{{method_field('PUT')}}
		</form>
	</div>

</body>
</html>
@endsection