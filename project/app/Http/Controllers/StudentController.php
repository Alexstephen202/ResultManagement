<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $users = StudentModel::orderBy('id','Desc')->get(); 
        
      
        return view('backend.pages.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.studform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $input = $request->except('image', '_token');
                    
        $file = $request->image;

        $destination = "image";
        $value = $this->fileUpload($file, $destination);
        $input['image'] = $value;


        

        $user = new StudentModel;
        $user->create($input);
       
        Session::flash('success', 'Your Product Added Successfully.');

        return redirect()->route('student.list');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = StudentModel::where('id',$id)->first();
        

        return view('backend.pages.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = StudentModel::where('id',$id)->first();

        return view('backend.pages.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = StudentModel::find($id);
       
        $user->update($request->all());
        // echo"<pre>"; print_r($user);exit;
        return redirect()->route('student.list')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = StudentModel::where('id',$id)->first();

        
        $user->delete();
    
                        

        return redirect()->route('student.list')
        ->with('success','Product deleted successfully');
    }

}
