<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherModel;
class TeacherController extends Controller
{
    
    public function index()
    {
        $users = TeacherModel::orderBy('id','Desc')->get(); 
        
    
        return view('backend.pages.teacherindex',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.teacherform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
         
        TeacherModel::create($request->all());
  
        return redirect()->route('teacher.list')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = TeacherModel::where('id',$id)->first();
        

        return view('backend.pages.teachershow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = TeacherModel::where('id',$id)->first();

        return view('backend.pages.teacheredit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = TeacherModel::find($id);
       
        $user->update($request->all());
        // echo"<pre>"; print_r($user);exit;
        return redirect()->route('teacher.list')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = TeacherModel::where('id',$id)->first();

        
        $user->delete();
    
                        

        return redirect()->route('teacher.list')
        ->with('success','Product deleted successfully');
    }


}
