<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DafdirController extends Controller
{
    public function index()
    {
        return view("mahasiswa.praktikum.daftarHadir.index");
    }
}
