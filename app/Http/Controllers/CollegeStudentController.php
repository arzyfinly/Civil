<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\PracticumRegistration;
use App\Models\User;
use App\Models\CollegeStudent;

class CollegeStudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        if($user->hasRole('admin')){
            $practicumRegistration = PracticumRegistration::where(['status_pembayaran'=>1, 'status'=>1])->get()->all();
            if($practicumRegistration != null)
            {
                foreach($practicumRegistration as $row)
                {
                    $students = CollegeStudent::where(['id'=>$row->college_student_id])->get()->all();
                    $practicum = Practicum::where(['id'=>$row->practicum_id])->get()->all();
                    foreach($practicum as $p)
                    {
                        return view('admin.collegeStudent.index', compact('practicumRegistration', 'p', 'students'));
                    }
                }
            }else{
                return view('admin.collegeStudent.index', compact('practicumRegistration'));
            }
        }else if($user->hasRole('student')) {
            $students = CollegeStudent::latest()->paginate(5);
            return view('collegestudent.index',compact('students'));
        } else {
            echo "Nothing";
        }
    }
}
