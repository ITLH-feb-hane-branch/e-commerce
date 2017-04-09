@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')

<center>
<table class="table table-hover">
   <tr>
      <th>ID</th>
      <th>User ID</th>
      <th>Product ID</th>
      <th>Status </th>
      <th>Created On</th>
      <th>Updated On</th>
      <th>Action</th>
    </tr>
 
    @foreach($wishlist_details as $wishlist_details) 
      <tr>
          <td>{{$wishlist_details->id}}</td>
          <td>{{$wishlist_details->user_id}}</td>
          <td>{{$wishlist_details->product_id}}</td>
          <td>{{$wishlist_details->status}}</td>
          <td>{{$wishlist_details->created_at}}</td>
          <td>{{$wishlist_details->updated_at}}</td>
          <td> <a href="/wishlist/delete/{{$wishlist_details->id}}">Delete</a> </td>
      </tr>
    @endforeach
 
@if(Session::has('unavailable'))
   {{Session::get(('unavailable'))}}
@endif
@if(Session::has('delete'))
   {{Session::get(('delete'))}}
@endif
</table>
</center>
@stop