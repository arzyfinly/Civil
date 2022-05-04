<?php

namespace App\Http\Controllers;

use App\Models\PracticumTime;
use Illuminate\Http\Request;

class PracticumTimeController extends Controller
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
            return view('admin.praktikum.practicumTime.index');
        }else{
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function show(PracticumTime $practicumTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticumTime $practicumTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PracticumTime $practicumTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticumTime $practicumTime)
    {
        //
    }
}
