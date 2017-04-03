@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EDIT CATEGORIES</title>
</head>
<body>
	<form method="POST" action="/update_category/{{$category->id}}">
		Name:<input type="text" value="{{$category->name}}" name="name"><br>
		@if($category->status === 1)
		Status:<input type="checkbox" checked name="status"><br>
		@else
		Status:<input type="checkbox" name="status"><br>
		@endif
		Created at:<input type="" value="{{$category->created_at}}" name="created_at"><br>
		Modified at:<input type="date" value="{{$category->updated_at}}" name="modified_at"><br>
		<input type="submit" value="update" name="update" ><br>
		{{csrf_field()}}
		{{method_field('PUT')}}
	</form>

</body>
</html>
@endsection