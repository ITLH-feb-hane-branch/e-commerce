@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<form method="POST" action="/material/store">
		Name:<input type="text"  name="name"><br>
		Status:<input type="checkbox" name="status"><br>
		Created at:<input type="date" name="created_at"><br>
		Created by:<input type="number" name="created_by"><br>
		Modified at:<input type="date" name="modified_at"><br>
		Modified by:<input type="number" name="modified_by"><br>
		<input type="submit" value="create" name ="Create" ><br>
		{{csrf_field()}}
		{{method_field('PUT')}}
	</form>

</body>
</html>
@endsection