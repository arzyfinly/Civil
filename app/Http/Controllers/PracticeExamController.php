<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticumTime;
use App\Models\Practicum;

class PracticeExamController extends Controller
{
    public function index()
    {
        return view("mahasiswa.praktikum.practiceExam.index");
    }
}
