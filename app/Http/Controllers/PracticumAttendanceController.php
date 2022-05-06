<?php

namespace App\Http\Controllers;

use App\Models\PracticumAttendance;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\PracticumRegistration;
use App\Models\User;
use App\Models\CollegeStudent;
use App\Models\PracticumTime;

class PracticumAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set("Asia/Bangkok");
        if (auth()->user()->hasRole('admin')) {
            $practicumregistrations = PracticumRegistration::all();
            $practicums = Practicum::all();
            return view('admin.praktikum.index', compact(
                'practicumregistrations','practicums'
            ));
        } else if (auth()->user()->hasRole('student')) {
            $user_id = auth()->user()->id;
            $college_student = CollegeStudent::where('user_id', $user_id)->get()->all();
            foreach($college_student as $c)
            {
                $practicumregistrations = PracticumRegistration::where('college_student_id', $c->id)->whereNotNull('group')->get()->all();
                if($practicumregistrations != null)
                {
                    foreach($practicumregistrations as $p)
                    {
                        $practicumTime = PracticumTime::where('practicum_id', $p->practicum_id)->get()->all();
                        return view('mahasiswa.praktikum.practicalImplementation.index', compact(
                            'practicumregistrations', 'practicumTime'
                        ));
                    }
                }else{
                    return view('mahasiswa.praktikum.practicalImplementation.index', compact(
                        'practicumregistrations'
                    ));
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticumAttendance  $practicumAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(PracticumAttendance $practicumAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticumAttendance  $practicumAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticumAttendance $practicumAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PracticumAttendance  $practicumAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PracticumAttendance $practicumAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticumAttendance  $practicumAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticumAttendance $practicumAttendance)
    {
        //
    }
}
