<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use App\Models\CollegeStudent;
use App\Http\Requests\PraktikumCreateRequest;

class KelompokController extends Controller
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
            return view('admin.praktikum.kelompokPraktikum.index', compact(
                'practicumregistrations','practicums'
            ));
        }else{
            echo "Nothing";
        }
    }
}
