<?php

namespace App\Http\Controllers;

use App\mymodel;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mymodel::all();
        return view('admin/post/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $rules=[ 'username' => 'required|min:4',
                        'email'    =>  'required'
                    ];

                $this->validate($request,$rules);

                mymodel::create($request->all());
                
                return redirect()->back()->with('success','user created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=mymodel::find($id);

        return view('admin.post.showPost', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=mymodel::find($id);

        return view('admin.post.editUser',compact('data'));
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

                $rules=[ 'username' => 'required|min:4',
                            'email'    =>  'required'
                       ];

                $this->validate($request,$rules);
                
                
                
                $getdata=mymodel::find($id);

                $getdata->update($request->all());  

                return redirect()->back()->with('success','data updated successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mymodel::where('id',$id)->delete();
        return redirect()->back()->with('success','one user deleted');
    }
}
