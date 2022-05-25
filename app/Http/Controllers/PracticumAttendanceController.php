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
        $user = auth()->user();
        if($user->hasRole('admin')){
            $practicumregistrations = PracticumRegistration::all();
            $practicums = Practicum::all();
            return view('admin.praktikum.listOfAttendees.index', compact('practicumregistrations','practicums'));
        } elseif($user->hasRole('student')) {
            $college = CollegeStudent::where(['user_id'=>$user->id])->get()->all();
            foreach($college as $c)
            {
                $practicumregistrations = PracticumRegistration::where(['status_pembayaran'=>1, 'status'=>1, 'college_student_id'=>$c->id])->whereNotNull('group')->get()->all();
                if($practicumregistrations != null)
                {
                    foreach($practicumregistrations as $row)
                    {
                        $p = PracticumRegistration::where('group', 'like', '%'.$row->group.'%')->get()->all();
                        return view("mahasiswa.praktikum.listOfAttendees.index", compact('practicumregistrations'));
                    }
                }else{
                    return view("mahasiswa.praktikum.listOfAttendees.index", compact('practicumregistrations'));
                }
            }
        } else {
            echo "Nothing";
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
