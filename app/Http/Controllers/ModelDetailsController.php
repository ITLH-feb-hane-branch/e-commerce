<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelDetail;

class ModelDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model=ModelDetail::all();      
        return view('models.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            'status'=> request('status')
            ]);
            \Session::flash('insert','Data Inserted');
            return redirect('products');
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
        $model=ModelDetail::find($id);
        return view('models.edit', compact('model'));
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
        $model=ModelDetail::find($id);
        $model->name=request('name');
        if(request('status')==='on'){
            $model->status=1;
        }
        else{
            $model->status=0;
        }
        $model->updated_at=request('updated_at');
        $model->save();
        \Session::flash('model_success', 'edit successful');
        return redirect('models/list');
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
