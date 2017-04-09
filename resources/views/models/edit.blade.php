{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <form action="/models/update/{{$model->id}}" method="POST">
		
        <div class="form-group">
                  <label >Enter new model name</label>
                  <input type="text" class="form-control" name="name">
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