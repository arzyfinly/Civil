<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaksanaanPrakController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            return view("admin.pelaksanaan");
        } elseif($user->hasRole('student')) {
            return view("mahasiswa.pelaksanaan");
        } else {
            echo "Nothing";
        }
    }
}
