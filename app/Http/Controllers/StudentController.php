<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("students.index", compact("students"));
    }

    public function create()
    {
        return view('students.create');
    }
    
    public function store(StudentRequest $request)
    {
        $student=$request->validated();

        $newStudent=Student::create($student); 
        return redirect(route('students.show',$newStudent));
        
    }

    public function show(Student $student)
    {   
        return view('students.show_students',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    
    }

    public function update(UpdateRequest $request, Student $student)
    {
       
        $data=$request->validated();
        $student->update($data);
       return redirect(route('students.show',compact('student')));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('students.index'));
        
    }
}
