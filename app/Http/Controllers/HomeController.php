<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Artisan;
use App\Models\PracticumRegistration;
use App\Models\CollegeStudent;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();


        if($auth->hasRole('admin')){
            return view('admin.index');
        } elseif($auth->hasRole('student')) {
            $college_student = CollegeStudent::where('id', $auth->id)->get()->all();

            if($college_student != null)
            {
                foreach($college_student as $college)
                {
                    $practicum_registration = PracticumRegistration::where('college_student_id', $college->id)->get()->all();
                    if($practicum_registration != null)
                    {
                        foreach($practicum_registration as $prak)
                        {
                            return view('mahasiswa.index', compact('practicum_registration', 'prak'));
                        }
                    }else{
                        return view('mahasiswa.index', compact('practicum_registration'));
                    }
                }
            }else{
                return view('mahasiswa.index');
            }
        }
    }
}
