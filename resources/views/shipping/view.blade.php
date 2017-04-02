@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content_header')
  <h1>Orders</h1><br>
  <table class="table table-hover">
  <tr>
    <th>Shipping ID</th>
    <th>Address</th>
    <th>Mobile Number</th>
    <th>Status</th>
    <th>Created at</th>
    <th>Created by</th>
    <th>Updated at</th>
    <th>Updated by</th>
  </tr>
  @foreach($shippings as $shipping)
    <tr>
      <td>{{$shipping->id}}</td>
      <td>{{$shipping->address}}</td>
      <td>{{$shipping->mobile_number}}</td>
      <td>{{$shipping->status}}</td>
      <td>{{$shipping->created_at}}</td>
      <td>{{$shipping->created_by}}</td>
      <td>{{$shipping->updated_at}}</td>
      <td>{{$shipping->updated_by}}</td>
    </tr>
  @endforeach
</table>
@stop
