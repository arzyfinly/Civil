<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
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
                    foreach($collegeStudent as $c)
                    {
                        foreach($practicums as $p)
                        {
                            return view('admin.praktikum.practicumGroup.index', compact(
                                'practicumregistrations','p', 'row', 'c'
                            ));
                        }
                    }
                }
            }else{
                return view('admin.praktikum.practicumGroup.index', compact(
                    'practicumregistrations'
                ));
            }
        }else{
            echo "Nothing";
        }
    }
}
