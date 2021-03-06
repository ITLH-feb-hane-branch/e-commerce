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
        $material = MaterialDetail :: all() -> where('status','1');;
        return view('material.list',compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Form Validation
        $this -> validate($request, [ 'name' => 'required|max:15' ]);
        //Insert Values
        if (request('status') === 'on') {
            $status = 1;
            # code...
        }
        else{
            $status = 0;
        }
        MaterialDetail :: Create([
            'name' => request('name'),
            'status' => $status,
            'created_at',
            'created_by' => '1',
            'updated_at',
            'updated_by' => '1' 
        ]);
        \Session :: flash('create','inserted successfully');
        return redirect('material/list'); 
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
        $material = MaterialDetail :: find($id);
        return view('material.edit',compact('material'));

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
        $this -> validate($request,[ 'name' => 'required|max:15' ]);
        $material = MaterialDetail :: find($id);
        $material -> name = request('name');           
        if (request('status') === 'on') {
            $material -> status = 1;
            
        }
        else{
            $material -> status = 0;
        }

        //$task->TaskDetail=request('status');
        $material -> updated_by = '5';
        $material -> save();
        \Session :: flash('update','updated successfully');
        return redirect('material/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = MaterialDetail :: find($id);
        $material -> status = 0;
        $material -> save();
        \Session :: flash('delete','Deleted successfully');
        return redirect('material/list');
    }
}
