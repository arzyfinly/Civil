<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticumTime;
use App\Models\CollegeStudent;
use App\Models\PracticumRegistration;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\PracticumAttendance;

class PracticalImplementationController extends Controller
{
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");
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
                    $attendance = PracticumAttendance::where(['practicum_registration_id'=>$p->id])->get()->all();
                    return view("mahasiswa.praktikum.practicalImplementation.index", compact('practicum', 'practicumRegistration', 'attendance'));
                }
            }else{
                Alert::error('Gagal', 'Anda Belum Masuk Kelompok!!');
                return redirect('home');
            }
        }
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        $practicumRegistration = PracticumRegistration::find($request->practicum_registration_id)->get()->all();
        foreach($practicumRegistration as $p)
        {
            $practicum = PracticumTime::where(['practicum_id'=>$p->practicum_id])->get()->all();
            foreach($practicum as $prac)
            {
                $presence_time = Date('H:i:s');
                $presence_day = Date('Y-m-d');
                $time = Date('H:i:s', strtotime('+15 minutes', strtotime($prac->start_time_in_day)));
                if($presence_time <= $time){
                    $data = [
                        'practicum_registration_id'=>$request->practicum_registration_id,
                        'presence_time'=>$presence_time,
                        'presence_day'=>$presence_day,
                        'status'=>'H'
                    ];
                    PracticumAttendance::create($data);
                    Alert::success('Success', 'Berhasil Melakukan Presensi!');
                    return redirect('pelaksanaan');
                }else{
                    $data = [
                        'practicum_registration_id'=>$request->practicum_registration_id,
                        'presence_time'=>$presence_time,
                        'presence_day'=>$presence_day,
                        'status'=>'A'
                    ];
                    PracticumAttendance::create($data);
                    Alert::success('Success', 'Berhasil Melakukan Presensi!');
                    return redirect('pelaksanaan');
                }
            }
        }
    }
}
