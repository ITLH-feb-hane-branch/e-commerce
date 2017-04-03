@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  <h1>Orders</h1><br>
  <table class="table table-hover">
  <tr>
    <th>Order ID</th>
    <th>Product ID</th>
    <th>User ID</th>
    <th>Shipping ID</th>
    <th>Order Date</th>
    <th>Cancellation Reason</th>
    <th>Action Date</th>
    <th>Status</th>
    <th>Created at</th>
    <th>Created by</th>
    <th>Updated at</th>
    <th>Updated by</th>
    <th>Action</th>
  </tr>
  @foreach($orders as $order)
    <tr>
      <td>{{$order->id}}</td>
      <td>{{$order->product_id}}</td>
      <td>{{$order->user_id}}</td>
      <td>{{$order->shipping_id}}</td>
      <td>{{$order->order_date}}</td>
      <td>{{$order->cancellation_reason}}</td>
      <td>{{$order->action_date}}</td>
      @if($order->status === 0)
      <td>Pending</td>
      @elseif($order->status === 1)
      <td>Delivered</td>
      @else
      <td>Cancelled</td>
      @endif
      <td>{{$order->created_at}}</td>
      <td>{{$order->created_by}}</td>
      <td>{{$order->updated_at}}</td>
      <td>{{$order->updated_by}}</td>
      <td><a href="orders/edit/{{$order->id}}">Edit Order</a></td>
    </tr>
  @endforeach
</table>
@if(Session::has('update'))
  {{Session::get('update')}}
@endif
@stop
