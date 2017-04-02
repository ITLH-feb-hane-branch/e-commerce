@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EDIT MATERIAL</title>
</head>
<body>
	<form method="POST" action="/update_material/{{$material->id}}">
		Name:<input type="text" value="{{$material->name}}" name="name"><br>
		@if($material->status === 1)
		Status:<input type="checkbox" checked name="status"><br>
		@else
		Status:<input type="checkbox" name="status"><br>
		@endif
		Created at:<input type="" value="{{$material->created_at}}" name="created_at"><br>
		Modified at:<input type="date" value="{{$material->updated_at}}" name="modified_at"><br>
		<input type="submit" value="update" name="update" ><br>
		{{csrf_field()}}
		{{method_field('PUT')}}
	</form>

</body>
</html>
@endsection