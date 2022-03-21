<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaksanaanPrakController extends Controller
{
    public function index()
    {
        return view("mahasiswa.pelaksanaan");
    }
}
