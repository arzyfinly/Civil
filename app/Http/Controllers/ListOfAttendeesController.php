<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use App\Models\CollegeStudent;
use App\Http\Requests\PraktikumCreateRequest;

class ListOfAttendeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            $practicumregistrations = PracticumRegistration::all();
            $practicums = Practicum::all();
            return view('admin.praktikum.listOfAttendees.index', compact('practicumregistrations','practicums'));
        } elseif($user->hasRole('student')) {
            $practicumregistrations = PracticumRegistration::where(['status_pembayaran'=>1, 'status'=>1])->whereNotNull('group')->get()->all();
            if($practicumregistrations != null)
            {
                foreach($practicumregistrations as $row)
                {
                    $collegeStudent = CollegeStudent::where(['id'=>$row->college_student_id])->get()->all();
                    if($collegeStudent != null)
                    {
                        return view("mahasiswa.praktikum.listOfAttendees.index", compact('practicumregistrations', 'row', 'collegeStudent'));
                    }else{
                        return view("mahasiswa.praktikum.listOfAttendees.index", compact('practicumregistrations', 'collegeStudent'));
                    }
                }
            }else{
                return view("mahasiswa.praktikum.listOfAttendees.index", compact('practicumregistrations'));
            }
        } else {
            echo "Nothing";
        }
    }
}
