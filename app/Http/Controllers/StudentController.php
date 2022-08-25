<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        
        Student::create($request->all());

        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show',compact('student'));
    }

    public function edit($id)
    {  
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {


        $student->update($request->all());

        return redirect()->route('student.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return back();
    }
}