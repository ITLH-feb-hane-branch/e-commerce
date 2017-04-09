{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/products/store" method="POST">
<div class="container">
  <div class="form-group">
    <label>Category Id</label>
    <input type="text" class="form-control" name="category_id">
  </div>

  <div class="form-group">
    <label>Model id</label>
    <input type="text" class="form-control" name="model_id">
  </div>

  <div class="form-group">
    <label>Material id</label>
    <input type="text" class="form-control" name="material_id">
  </div>

  <div class="form-group">
    <label>Name</label>
    <input type="" class="form-control" name="name">
  </div>

  <div class="form-group">
    <label>Image 1</label>
    <input type="text" class="form-control" name="image_1">
  </div>

  <div class="form-group">
    <label>Image 2</label>
    <input type="text" class="form-control" name="image_2">
  </div>

  <div class="form-group">
    <label>Image 3</label>
    <input type="text" class="form-control" name="image_3">
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
  </div>

  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" name="quantity">
  </div>

      <input type="submit" value="create" name ="create" ><br>

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
  {{csrf_field()}}
    {{method_field('PUT')}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> </script>
@stop
</form>