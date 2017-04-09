<?php

namespace App\Http\Controllers;
use \App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view_details = User::all();
        return view('users.userlist',compact('view_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $view_details = User::all();
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $this ->validate($request,[ 'role_id'=>'required' , 'first_name'=>'required' , 'last_name'=>'required' , 'contact_no'=>'required' , 'password'=>'required' , 'status'=>'required' , 'email'=>'required' ]);   
         User::create([
            'role_id'   => request('role_id'),
            'first_name'=> request('first_name'),
            'last_name' => request('last_name'),
            'contact_no'=> request('contact_no'),
            'status'    => request('status'),
            'email'     => request('email'),
            'password'  => request('password')//,
           // 'created_at'=> request('created_at'),
            //'updated_at'=> request('updated_at')
            ]);
            \Session:: flash('insert','Data Inserted');
            return redirect('users');
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
        $update = User::find($id);
        return view('users/edit',compact('update'));
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
     $this ->validate($request,[ 'role_id'=>'required' , 'first_name'=>'required' , 'last_name'=>'required' , 'contact_no'=>'required' , 'password'=>'required' ]);
        
        $update =  User::find($id);
        $update ->first_name = request('first_name');
        $update ->last_name  = request('last_name');
        $update ->contact_no = request('mobile_no');
        $update ->password   = request('password');
        $update ->save();
        \Session:: flash('update','Data Updated');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            User:: destroy($id);
        \Session:: flash('delete','Data deleted');
                 return redirect('users');

    }
}
