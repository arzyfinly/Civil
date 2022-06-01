<?php

namespace App\Http\Controllers;

use App\Models\BaPelaksanaan;
use Illuminate\Http\Request;

class BaPelaksanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bapelaksanaan = BaPelaksanaan::where('status', '1');
        return view('admin.praktikum.baPelaksanaan.index', compact('bapelaksanaan'));
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
     * @param  \App\Models\BaPelaksanaan  $baPelaksanaan
     * @return \Illuminate\Http\Response
     */
    public function show(BaPelaksanaan $baPelaksanaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaPelaksanaan  $baPelaksanaan
     * @return \Illuminate\Http\Response
     */
    public function edit(BaPelaksanaan $baPelaksanaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaPelaksanaan  $baPelaksanaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaPelaksanaan $baPelaksanaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaPelaksanaan  $baPelaksanaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaPelaksanaan $baPelaksanaan)
    {
        //
    }
}
