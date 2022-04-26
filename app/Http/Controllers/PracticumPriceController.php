<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Models\Practicum;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Session;

class PracticumPriceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $id_user = Auth::user()->id;

        $practicum = Practicum::all();
        if($practicum != null)
        {
            $no=1;
            return view("admin.praktikum.practicumPrice.index", compact('practicum', 'no'));
        }else{
            return view("admin.praktikum.practicumPrice.index", compact('practicum'));
        }
    }
    public function create()
    {
        $practicum = Practicum::all();
        dd($practicum);
        return view("admin.praktikum.practicumPrice.create", compact('practicum'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PracticumAttendance $practicumAttendance)
    {
        //
    }

    public function edit(PracticumAttendance $practicumAttendance)
    {
        //
    }

    public function update(Request $request, PracticumAttendance $practicumAttendance)
    {
        //
    }

    public function destroy(PracticumAttendance $practicumAttendance)
    {
        //
    }

}
