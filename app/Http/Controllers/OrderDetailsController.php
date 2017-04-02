<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
  public function index()
  {
    $orders=OrderDetail::all();
    return view('orders/view',compact('orders'));
  }

  public function edit($id){
    $orders=OrderDetail::find($id);
    return view('orders/edit',compact('orders'));
  }

  public function update($id,Request $request){
    $orders=OrderDetail::find($id);
    $orders->action_date=request('actiondate');
    $orders->status=request('status','value');
    $orders->save();
    \Session::flash('update','Data Updated');
    return redirect('orders');
  }
}
