<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class ToolRentalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id_user = auth()->user()->id;
        return view("admin.toolRental.index");
    }
}
