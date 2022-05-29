<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticumTime;
use App\Models\PracticumRegistration;
use App\Models\CollegeStudent;
use RealRashid\SweetAlert\Facades\Alert;

class PracticeExamController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $college = CollegeStudent::where(['user_id'=>$user->id])->get()->all();
        foreach($college as $c)
        {
            $practicumRegistration = PracticumRegistration::where(['college_student_id'=>$c->id])->whereNotNull('group')->get()->all();
            if($practicumRegistration != null)
            {
                foreach($practicumRegistration as $p)
                {
                    $practicum = PracticumTime::where(['practicum_id'=>$p->practicum_id, 'kelas'=>$c->kelas])->get()->all();
                    return view("mahasiswa.praktikum.practiceExam.index", compact('practicum'));
                }
            }else{
                Alert::error('Gagal', 'Anda Belum Masuk Kelompok!!');
                return redirect('home');
            }
        }
    }
}
