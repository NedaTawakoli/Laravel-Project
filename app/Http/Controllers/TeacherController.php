<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function show( ){
      return  Teacher::with('user')->get();
    }
    public function index($id){
     return Teacher::where('id',$id)->get();
    }
}
