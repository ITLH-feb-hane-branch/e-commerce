<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;

class CartsController extends Controller
{
    public function index() {
        $cart_details = CartDetail::where('status', 1)->get();
        return view('cart/list', compact('cart_details'));
    }

	public function delete($id) {
        $cart_details = CartDetail::find($id);

    	       if ($cart_details) {
                   $cart_details->status='0';
                   $cart_details->save();
                }
               else{
        	       echo "ERROR";
                }

        \Session::flash('delete','Cart Deleted Successfully!');
        return redirect('cart/list');
	}


    public function edit($id){
        $cart_details=CartDetail::find($id);
        return view('cart.edit',compact('cart_details'));
    }

    public function update(Request $request, $id){
        $cart_details=CartDetail::find($id);
        $cart_details->quantity=request('quantity');           
        $cart_details->updated_at=request('modified_at');
        $cart_details->save();

        \Session::flash('update','Cart Updated Successfully!');
        return redirect('cart/list');
    }

}