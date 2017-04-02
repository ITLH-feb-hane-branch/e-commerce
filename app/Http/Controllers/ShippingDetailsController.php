<?php

namespace App\Http\Controllers;
use App\ShippingDetail;
use Illuminate\Http\Request;

class ShippingDetailsController extends Controller
{
  public function index(){
    $shippings=ShippingDetail::all();
    //dd($shippings);
    return view('shipping/view',compact('shippings'));
  }
}
