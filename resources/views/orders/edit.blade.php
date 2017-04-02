@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')

<form method="POST" action="/orders/update/{{$orders->id}}">
<h1>Edit Order:{{$orders->id}}</h1>
  Status :
  @if($orders->status === 0)
  Status :
  <input type="radio" name="status" value="0" checked> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @elseif($orders->status === 1)
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1" checked> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @elseif($orders->status === 2)
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2" checked> Cancel<br><br>
  @else
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @endif
  Action Date : <input type="date" name="actiondate" value="{{$orders->action_date}}"><br><br>
  <input class="btn" type="submit" value="Update">
  {{csrf_field()}}
  {{method_field('PUT')}}
</form>
@stop
