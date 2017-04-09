@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<div class="box box-info">
		<form class = "box-body form-group" method="POST" action="/material/store">
			Name:<input type="text" class="form-control" name="name"><br>
			Status:<input type="checkbox" name="status"><br>
			<input type="submit" value="create" name ="Create" ><br>
			{{csrf_field()}}
			{{method_field('PUT')}}
		</form>
	</div>
	@if (count($errors) > 0)
        <div class="alert alert-danger rtl">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <ul class="list">
                @foreach($errors->all() as $err)
                    <li class="liste-item">{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
@endsection