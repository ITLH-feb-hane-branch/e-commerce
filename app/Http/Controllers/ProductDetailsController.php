<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProductDetail;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=ProductDetail::all() -> where('status','1');
        return view('products.list', compact('product'));

                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //Form Validation
        $this -> validate($request,[ 
        'name' => 'required|max:15'
        ]);}
        //Insert Values
        if (request('status') === 'on') {
        $status = 1;
        }
        else{
        $status = 0;
        }	 
        ProductDetail::create([
            'category_id'=> request('category_id'),
            'model_id'=> request('model_id'),
            'material_id'=> request('material_id'),
            'name'=> request('name'),
            'image_1'=> request('image_1'),
            'image_2'=> request('image_2'),
            'image_3'=> request('image_3'),
            'description'=> request('description'),
            'price'=> request('price'),
            'quantity'=> request('quantity'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1
            ]);
        \Session :: flash('create','inserted successfully');
        return redirect('products/list');
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
        $product = ProductDetail::find($id);
        $product -> category_id=request('category_id');
        $product -> model_id=request('model_id');
        $product -> material_id=request('material_id');
        $product -> name=request('name');
        $product -> image_1=request('image_1');
        $product -> image_2=request('image_2');
        $product -> image_3=request('image_3');
        $product -> description=request('description');
        $product -> price=request('price');
        $product -> quantity=request('quantity');
        $product -> created_by=1;
        $product -> updated_by=1;
        if(request('status')==='on'){
            $product->status=1;
        }
        else{
            $product->status=0;
        }
        $product -> save();
        \Session :: flash('update','updated successfully');
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
        $product = ProductDetail :: find($id);
        $product -> status = 0;
        $product -> save();
        \Session :: flash('delete','Deleted successfully');
        return redirect('products/list');
    }
}
