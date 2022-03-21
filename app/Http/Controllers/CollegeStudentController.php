<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Model\CollegeStudent;

class CollegeStudentController extends Controller
{
    public function index(){
        $students = CollegeStudent::latest()->paginate(5);
        return view('collegestudent.index',compact('students'));
    }
}
