<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialDetail;

class MaterialDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material=MaterialDetail::all();
        return view('list_material',compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_material');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request('status')==='on') {
        $status=1;
        # code...
        }
        else{
        $status=0;
        }
        MaterialDetail:: Create([
            'name'=>request('name'),'status'=>$status,'created_at'=>request('created_at'),'updated_at'=>request('modified_at')
            ]);
        \Session::flash('create','inserted successfully');
        return redirect('list_material'); 
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
        $material=MaterialDetail::find($id);
        return view('edit_material',compact('material'));

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
        $material=MaterialDetail::find($id);
        $material->name=request('name');           
        if (request('status')==='on') {
            $material->status=1;
            # code...
        }
        else{
            $material->status=0;
        }

        //$task->TaskDetail=request('status');
        $material->created_at=request('created_at');
        $material->updated_at=request('modified_at');
        $material->save();
        \Session::flash('update','updated successfully');
        return redirect('list_material');
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
