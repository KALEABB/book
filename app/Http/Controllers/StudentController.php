<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Student  $student
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Student $student)
    // {
    //     //
    // }
    public function index()
    {
        $students = Student::latest()->paginate(5);
        
        return view('students.index',compact('students'))
        ->with('i',(request()->input('page',1)-1)*5);
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
         

            //php artisan migrate:refresh
            'studname' => 'required',
            'course' => 'required',
            'fee' => 'required',
            'booktitle' => 'required',
            'bookauther' => 'required',
            'bookcatagoriy' => 'required',
            'bookborrowingdate' => 'required',
            'bookteturneddate' => 'required',

        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
        ->with('success','Students created successfully.');
    }
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }
    public function update(Request $request,Student $student)
    {
        $request->validate([

        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
        ->with('success','Student updated successfully');
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')
        ->with('success','Student deleted successfully');
    }
  
  

   
}