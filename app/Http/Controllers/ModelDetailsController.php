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
        $model=ModelDetail::all() -> where('status','1');      
        return view('models.list', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (request('status') === 'on') {
        $status = 1;
        }
        else{
        $status = 0;
        }
        //dd('hi');  
        ModelDetail::create([
            'name'=> request('name'),
            'status'=> 1,
            'created_at',
            'created_by' => 1,
            'updated_at',
            'updated_by' => 1
            ]);
        \Session :: flash('create','inserted successfully');
        return redirect('models/list');
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
        $model -> updated_at=request('updated_at');
        $model -> save();
        \Session :: flash('model_success', 'edit successful');
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
        $model = ModelDetail :: find($id);
        $model -> status = 0;
        $model -> save();
        \Session :: flash('delete','Deleted successfully');
        return redirect('models/list');
    }
}
