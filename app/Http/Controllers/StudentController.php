<?php

namespace App\Http\Controllers;

use App\degree;
use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= student::simplePaginate(2);
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $degrees= degree::All();
        return view('students.create',compact('degrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student= new student;
        $student->num_list =$request->num_list ;
        $student->name =$request->name ;
        $student->surname=$request->surname;
        $student->gender=$request->gender;
        $student->degrees_id=$request->degrees_id;
        $student->save();
        return redirect()->route('students.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $degrees= degree::All();
        return view('students.edit',compact('student','degrees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $student->num_list =$request->num_list ;
        $student->name =$request->name ;
        $student->surname=$request->surname;
        $student->gender=$request->gender;
        $student->degrees_id=$request->degrees_id;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete ();
        return view('students.index',compact('student'));
    }
}
