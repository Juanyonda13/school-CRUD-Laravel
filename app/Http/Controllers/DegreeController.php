<?php

namespace App\Http\Controllers;

use App\degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = degree::simplePaginate(2);
        return view('degrees.index',compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('degrees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $degree= new degree;
        $degree->name=$request->name;
        $degree->period=$request->period;
        $degree->save();
        return redirect()->route('degrees.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(degree $degree)
    {
        return view('degrees.edit',compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, degree $degree)
    {
        $degree->name=$request->name;
        $degree->period=$request->period;
        $degree->save();
        return redirect()->route('degrees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(degree $degree)
    {
        $degree->delete();
        return view('degrees.index',compact('degree'));
    }
}
