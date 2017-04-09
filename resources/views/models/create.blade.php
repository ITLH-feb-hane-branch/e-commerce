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
  <div class="form-group">
    <label>Name</label>
    <input type="" class="form-control" name="name">
  </div>
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