<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\LecturerInventaris;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class LecturerInventarisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            $lecturer = LecturerInventaris::all();
            $no = 1;
            return view('admin.inventaris.lecturerOrCollegeStudent.index', compact('lecturer', 'no'));
        } else {
            echo "Nothing";
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        LecturerInventaris::create($data);
        Alert::success('Success', 'Data have been succesfully saved!');
        return redirect('lecturerInventaris');
    }

    public function destroy($id)
    {
        $lecturer = LecturerInventaris::find($id);
        $lecturer->delete();
    }
}
