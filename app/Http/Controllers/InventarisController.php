<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use App\Models\CollegeStudent;
use App\Http\Requests\PraktikumCreateRequest;

class InventarisController extends Controller
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
            return view('admin.inventaris.index', compact(
                'practicumregistrations','practicums'
            ));
        } elseif($user->hasRole('student')) {
            $user_id = $user->id;
            $collage = CollegeStudent::where(["user_id"=>$user_id])->first();
            if($collage != null){
                return view("mahasiswa.inventaris.index", ["row"=>$row]);
            }else{
                Session::flash('message', "Special message goes here");
                return redirect("mahasiswa/profile/");
            }
        } else {
            echo "Nothing";
        }
    }
    public function create()
    {
        if (auth()->user()->hasRole('admin')) {
            return view('admin.inventaris.create');
        } else if (auth()->user()->hasRole('student')) {
            $c_student = CollegeStudent::where('user_id', auth()->user()->id)->get()->all();
            if($c_student != null)
            {
                $collegestudent = CollegeStudent::where('user_id', auth()->user()->id)->get()->all();
                foreach($collegestudent as $row)
                {
                    $practicum_registration = PracticumRegistration::where(['college_student_id'=>$row->id])->get()->all();
                    if($practicum_registration == null)
                    {
                        $practicums = Practicum::get()->all();
                        return view('mahasiswa.praktikum.pendaftaranPraktikum.create', compact(
                            'practicums','collegestudent', 'practicum_registration'));
                    }else{
                        return redirect('praktikum');
                    }
                }
            }
            else
            {
                return redirect('profile');
            }
        }   
    }
}
