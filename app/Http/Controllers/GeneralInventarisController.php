<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\GeneralInventaris;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class GeneralInventarisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            $general = GeneralInventaris::all();
            $no = 1;
            return view('admin.inventaris.general.index', compact('general', 'no'));
        } else {
            echo "Nothing";
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        GeneralInventaris::create($data);
        Alert::success('Success', 'Data have been succesfully saved!');
        return redirect('generalInventaris');
    }

    public function destroy($id)
    {
        $general = GeneralInventaris::find($id);
        $general->delete();
    }
}
