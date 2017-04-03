<?php

namespace App\Http\Controllers;
use App\ShippingDetail;
use Illuminate\Http\Request;

class ShippingDetailsController extends Controller
{
  public function index(){
    //getting data from table
    $shippings = ShippingDetail :: all();
    //displaying data in tabular format
    return view( 'shipping/view' , compact('shippings') );
  }
}
