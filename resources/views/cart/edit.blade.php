@extends('adminlte::page')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>EDIT CART</title>
</head>
<body>
	<h3 class="box-title">Edit Cart:{{$cart_details->id}}</h3>
	<div class="box box-info">
          <form action="/cart/update/{{$cart_details->id}}" method="post"><center><br>
          Enter Quantity:<input type="number" min="0" max="10" value="{{$cart_details->quantity}}" name="quantity"><br><br>
          <input type="submit" name=""><br><br>
          {{csrf_field()}}
		  {{method_field('PUT')}}
          </center></form>  
	</div>

</body>
</html>
@endsection