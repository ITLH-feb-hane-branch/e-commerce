{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <form action="/update/{{$product->id}}" method="POST">
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

        <input type="checkbox">status</input>

        <div class="form-group">
                  <label >updated at</label>
                  <input type="text" class="form-control" name="updated_at">
        </div>

        <input type="submit" value="insert" name="update"></input>

        {{csrf_field()}}
        {{method_field('PUT')}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop