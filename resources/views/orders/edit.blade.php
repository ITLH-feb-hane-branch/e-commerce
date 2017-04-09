@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="box box-info" style="padding-left:50px;">
<form id="myform" method="POST" action="/orders/update/{{$orders->id}}">
<h1>Edit Order:{{$orders -> id}}</h1>
  <label class="col-xs-3 control-label">Status</label>
  @if($orders -> status === 0)
  Status :
  <input type="radio" name="status" value="0" checked> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @elseif($orders -> status === 1)
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1" checked> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @elseif($orders -> status === 2)
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2" checked> Cancel<br><br>
  @else
  <input type="radio" name="status" value="0"> Pending
  <input type="radio" name="status" value="1"> Delivered
  <input type="radio" name="status" value="2"> Cancel<br><br>
  @endif
  <label class="col-xs-3 control-label">Action Date</label>
       <div class="col-xs-5">
           <input type="date" class="form-control" name="actiondate" value="{{$orders->action_date}}" required/>
       </div>
  <br><br>
  <input class="btn btn-default col-m-4" type="submit" value="Update">
  {{csrf_field()}}
  {{method_field('PUT')}}
</form>
<br>
</div>
@if (count($errors) > 0)
      <div class="alert alert-danger rtl">
          <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
          <ul class="list">
              @foreach($errors -> all() as $err)
                  <li>{{ $err }}</li>
              @endforeach
          </ul>
      </div>
  @endif
@stop
