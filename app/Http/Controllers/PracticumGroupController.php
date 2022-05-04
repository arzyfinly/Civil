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

    public function GetCollegeStudent(Request $req) {
        $college = PracticumRegistration::where(['practicum_id'=>$req->praktikum_id, 'status_pembayaran'=>1, 'status'=>1])
                ->whereNull('group')
                ->join('college_students', 'practicum_registrations.college_student_id', '=', 'college_students.id')
                ->get()->all();

        return $college;
    }

    public function store(Request $request){

    }
}
