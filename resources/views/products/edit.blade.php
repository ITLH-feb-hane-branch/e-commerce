{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Product</h1>
@stop

@section('content')

    <form action="/products/update/{{$product->id}}" method="POST">
		<div class="form-group">
                  <label>Enter new category id</label>
                  <input type="text" class="form-control" name="category_id">
        </div>

        <div class="form-group">
                  <label >Enter new model id</label>
                  <input type="text" class="form-control" name="model_id">
        </div>

        <div class="form-group">
                  <label>Enter new material id</label>
                  <input type="text" class="form-control" name="material_id">
        </div>

        <div class="form-group">
                  <label >Enter new name</label>
                  <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
                  <label >Enter new image 1 path</label>
                  <input type="text" class="form-control" name="image_1">
        </div>

        <div class="form-group">
                  <label >Enter new image 2 path</label>
                  <input type="text" class="form-control" name="image_2">
        </div>

        <div class="form-group">
                  <label >Enter new image 3 path</label>
                  <input type="text" class="form-control" name="image_3">
        </div>

        <div class="form-group">
                  <label >Enter new description</label>
                  <input type="text" class="form-control" name="description">
        </div>

        <div class="form-group">
                  <label >Enter new price</label>
                  <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
                  <label >Enter new quantity</label>
                  <input type="text" class="form-control" name="quantity">
        </div>

        @if($product -> status === 1)
        <input type="checkbox" checked name="status">status</input>
        @else
        <input type="checkbox" value="update" name="update">status</input>
        @endif

        <input type="submit" value="insert" name="update"></input>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
</form>

        {{csrf_field()}}
        {{method_field('PUT')}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop