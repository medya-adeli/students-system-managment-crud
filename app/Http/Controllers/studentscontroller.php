<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $filename=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('image',$filename,'public');
        $requestData['image']='/storage/'.$path;Student::create($requestData);
        return redirect('students')->with('flash_message', 'Student Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
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
        $student = Student::find($id);
        $requestData = $request->all();
        $student->update($requestData);
        if($request->hasFile('image'))
        {
                    $requestData = $request->all();
        $filename=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('image',$filename,'public');
        $requestData['image']='/storage/'.$path;Student::create($requestData);
        }
        return redirect('students')->with('flash_message', 'student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!'); 
    }
}
