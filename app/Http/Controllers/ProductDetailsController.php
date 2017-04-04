<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductDetail;
use App\ModelDetail;
class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=ProductDetail::all();
        $model=ModelDetail::all();        
        return view('products.list', compact('product','model'));

                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=ProductDetail::find($id);
        //dd($product);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=ProductDetail::find($id);
        $product->category_id=request('category_id');
        $product->model_id=request('model_id');
        $product->material_id=request('material_id');
        $product->name=request('name');
        $product->image_1=request('image_1');
        $product->image_2=request('image_2');
        $product->image_3=request('image_3');
        $product->description=request('description');
        $product->price=request('price');
        $product->quantity=request('quantity');
        if(request('status')==='on'){
            $product->status=1;
        }
        else{
            $product->status=0;
        }
        $product->updated_at=request('created_at');
        $product->save();
        \Session::flash('product_success', 'edit successful');
        // dd('hello');
        return redirect('products/list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
