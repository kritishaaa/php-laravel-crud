<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('students.create');
    }
    
    public function store(Request $request)
    {
        $student=$request->all();
        $newStudent=Student::create($student); 
        return redirect(route('students.show',$newStudent->id));
        
    }

    public function show(string $id)
    {
        return view('welcome');
    }


    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
