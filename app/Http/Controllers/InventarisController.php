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

    public function general()
    {
        return view('admin.inventaris.general');
    }

    public function lecturerOrCollegeStudent()
    {
        return view('admin.inventaris.lecturerOrCollegeStudent');
    }
}
