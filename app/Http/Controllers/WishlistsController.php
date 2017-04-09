<?php

namespace App\Http\Controllers;

use App\WishlistDetail;

class WishlistsController extends Controller
{
    public function index() {
         $wishlist_details = WishlistDetail::where('status', 1)->get();
         return view('wishlist/list', compact('wishlist_details'));
    }


	public function delete($id) {
         $wishlist_details = WishlistDetail::find($id);

    	     if ($wishlist_details) {
                 $wishlist_details->status='0';
                 $wishlist_details->save();
             }
             else{
                 \Session::flash('unavailable','Wishlist Unavailable');
                 return redirect('wishlist/list');
             }

         \Session::flash('delete','Wishlist Deleted Successfully');
         return redirect('wishlist/list');
	}
	    
}
