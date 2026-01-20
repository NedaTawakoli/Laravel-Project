<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
     $students = Student::all();
     return view('Student.home')->with('student',$students);
    }
    public function show(){
       return User::all();
    }
   public function edit($id){
   $student = Student::findOrFail($id);
   Gate::authorize('update',$student);
    return view('Student.edit',compact('student'));
   }
   public function update(Request $request ,$id){
   $student = Student::findOrFail($id);
   Gate::authorize('update',$student);
   $student->name = $request->name;
   $student->lastName = $request->lastName;
   $student->update();
   session()->flash('massage','data has been updata');
   return redirect('student');
   }
 
}
