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
			<input type="submit" value="update" name="update" ><br>
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