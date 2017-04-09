<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
  public function index()
  {
    $orders = OrderDetail :: all();
    //displays data of order_details
    return view( 'orders/view' , compact( 'orders' ) );
  }

  public function edit( $id ){
    $orders = OrderDetail :: find( $id );
    //display edit form
    return view( 'orders/edit' , compact( 'orders' ) );
  }

  public function update( $id , Request $request ){
    //validating the input fields
    $orders = OrderDetail :: find( $id );
    $orders -> action_date = request( 'actiondate' );
    $orders -> status = request( 'status','value' );
    //saving data into table
    $orders -> save();
    //creating flash message
    \Session :: flash( 'update' , 'Data Updated' );
    return redirect( 'orders' );
  }
}
