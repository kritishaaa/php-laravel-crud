<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('students.create');
    }
    
    public function store(StudentRequest $request)
    {
        $student=$request->all();
        $newStudent=Student::create($student); 
        return redirect(route('students.show',$newStudent->id));
        
    }

    public function show(string $id)
    {
        $students=Student::all();
        return view('students.show_students',compact('students'));
    }

    public function edit(string $id)
    {
        $student= Student::findOrFail($id);
        return view('students.edit',compact('student'));
    
    }

    public function update(Request $request, string $id)
    {
       $student=Student::findOrFail($id);
       $student->update($request->all());
       return redirect(route('students.show',compact('student')));
    }

    public function destroy(string $id)
    {
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect(route('students.show',compact('student')));
        
    }
}
