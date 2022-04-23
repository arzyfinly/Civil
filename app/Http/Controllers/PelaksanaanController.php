<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    public function index()
    {
        return view("mahasiswa.praktikum.pelaksanaan.index");
    }
}
