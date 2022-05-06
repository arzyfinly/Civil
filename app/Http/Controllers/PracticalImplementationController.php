<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticalImplementationController extends Controller
{
    public function index()
    {
        return view("mahasiswa.praktikum.practicalImplementation.index");
    }
}
