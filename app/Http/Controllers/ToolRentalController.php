<?php

namespace App\Http\Controllers;

use App\Models\ToolRental;
use Session;
use Illuminate\Http\Request;

class ToolRentalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id_user = auth()->user()->id;
        return view("admin.toolRental.index");
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
     * @param  \App\Models\ToolRental  $toolRental
     * @return \Illuminate\Http\Response
     */
    public function show(ToolRental $toolRental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToolRental  $toolRental
     * @return \Illuminate\Http\Response
     */
    public function edit(ToolRental $toolRental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ToolRental  $toolRental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToolRental $toolRental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToolRental  $toolRental
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToolRental $toolRental)
    {
        //
    }
}
