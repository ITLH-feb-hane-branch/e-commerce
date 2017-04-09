@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')

<center>
<table class="table table-hover">
   <tr>
      <th>ID</th>
      <th>User ID</th>
      <th>Product ID</th>
      <th>Quantity</th>
      <th>Status</th>
      <th>Created On</th>
      <th>Updated On</th>
      <th>Action</th>
    </tr>
 
    @foreach($cart_details as $cart_details) 
      <tr>
          <td>{{$cart_details->id}}</td>
          <td>{{$cart_details->user_id}}</td>
          <td>{{$cart_details->product_id}}</td>
          <td>{{$cart_details->quantity}}</td>
          <td>{{$cart_details->status}}</td>
          <td>{{$cart_details->created_at}}</td>
          <td>{{$cart_details->updated_at}}</td>
          <td> 
          <a href="/cart/edit/{{$cart_details->id}}">Edit</a>
          <a href="/cart/delete/{{$cart_details->id}}">Delete</a>
          </td>
      </tr>
    @endforeach

@if(Session::has('update'))
   {{Session::get(('update'))}}
@endif
@if(Session::has('delete'))
   {{Session::get(('delete'))}}
@endif

</table>
</center>
@stop