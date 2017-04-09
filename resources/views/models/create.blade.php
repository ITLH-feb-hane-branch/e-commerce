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
    <label>Model</label>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
  </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <input type="Submit" name="Submit">
</div>
  {{csrf_field()}}
    {{method_field('PUT')}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop