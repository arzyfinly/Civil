<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use DB;
use App\Models\CollegeStudent;
use App\Http\Requests\PraktikumCreateRequest;

class PracticumGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            $practicumregistrations = PracticumRegistration::whereNotNull('group')->get()->all();
            if($practicumregistrations != null)
            {
                foreach($practicumregistrations as $row)
                {
                    $collegeStudent = CollegeStudent::where(['id'=>$row->id])->get()->all();
                    $practicums = Practicum::where(['id'=>$row->practicum_id])->get()->all();
                    $practicum = Practicum::all();
                    foreach($collegeStudent as $c)
                    {
                        foreach($practicums as $p)
                        {
                            return view('admin.praktikum.practicumGroup.index', compact(
                                'practicumregistrations','p', 'row', 'c', 'collegeStudent', 'practicums', 'practicum'
                            ));
                        }
                    }
                }
            }else{
                $practicum = Practicum::all();
                return view('admin.praktikum.practicumGroup.index', compact(
                    'practicumregistrations', 'practicum'
                ));
            }
        }else{
            echo "Nothing";
        }
    }

    public function GetCollegeStudent($id) {
        $college = PracticumRegistration::where(['practicum_id'=>$id, 'status_pembayaran'=>1, 'status'=>1])
                ->whereNull('group')
                ->get()->all();
        return response()->json($college, 200);
    }

    public function store(Request $request){

        $data = $request->all();
        $id = $data['pracreg_id'];
        $practicum_registration = PracticumRegistration::find($id);
        $practicum_registration->update([
            'group' => $data['group'], 'updated_at' => false
        ]);
        return redirect('kelompok');
    }
}
