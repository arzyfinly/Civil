<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Practicum;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

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
        return view("admin.praktikum.practicumPrice.create", compact('practicum'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
            $practicum = Practicum::create($data);
    
            if($practicum){
                toast()->success('Success', 'Data have been succesfully saved!');
                return redirect()->route('hargaPraktikum.index');
            } else {
                toast()->success('Success', 'Data have been succesfully saved!');
                return redirect()->route('hargaPraktikum.index');
            }
    }

    public function show(Practicum $practicumAttendance)
    {
        //
    }

    public function edit(Practicum $practicumAttendance)
    {
        //
    }

    public function update(Request $request, Practicum $practicumAttendance)
    {
        //
    }

    public function destroy($id)
    {
            $Practicum = Practicum::find($id);
            $d = $Practicum->delete();
    }
}
