<?php

namespace App\Http\Controllers;

use App\Models\PracticumTime;
use App\Models\Practicum;
use RealRashid\SweetAlert\Facades\Alert;
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
            $practicum = Practicum::all();
            $practicumTime = PracticumTime::all();
            $no=1;
            return view('admin.praktikum.practicumTime.index', compact('practicum', 'practicumTime', 'no'));
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
        $data = $request->all();
        PracticumTime::create($data);
        Alert::success('Success', 'Data have been succesfully saved!');
        return redirect('practicumTime');
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
        $practicumTimes = PracticumTime::find($practicumTime->id);
        $practicum = Practicum::all();
        return view('admin.praktikum.practicumTime.edit', compact('practicumTimes', 'practicum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $practicumTime)
    {
        $data = $request->all();
        $practicumTimes = PracticumTime::find($practicumTime);
        $practicumTimes->update($data);
        toast()->success('Success', 'Data have been succesfully saved!');
        return redirect()->route('practicumTime.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticumTime  $practicumTime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practicumTime = PracticumTime::find($id);
        $delete = $practicumTime->delete();
    }
}
