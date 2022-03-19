<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Artisan;


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
            $respon = 'admin';
            return view('home', compact('respon'));
        } elseif($auth->hasRole('student')) {
            $respon = 'student';
            return view('home', compact('respon'));
        }
    }
}
