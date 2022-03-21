<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeStudent;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\PendaftaranPraktikumRequest;
use Session;

class PendaftaranPraktikumController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            return view('admin.pendaftaran');
        } elseif($user->hasRole('student')) {
            $user_id = $user->id;
            $collage = CollegeStudent::where(["user_id"=>$user_id])->get()->all();
            foreach($collage as $row){
                if($row){
                    return view("mahasiswa.pendaftaran", ["row"=>$row]);
                }else{
                    Session::flash('message', "Special message goes here");
                    return redirect("mahasiswa/profile");
                }
            }
        } else {
            
        }
    }
    public function store(PendaftaranPraktikumRequest $request)
    {
        $data = $request->validated();
        $pendaftaran_praktikum = PendaftaranPraktikum::create($data);

        if($pendaftaran_praktikum){
            return response()->json([
                'success'=> true,
                'message' => "$pendaftaran_praktikum->name berhasil ditambahkan!"
            ],200);
        } else {
            
            
            return response()->json([
                'success' => false,
                'message' => 'Data gagal disimpan!',
            ], 409);
        }
    }
    public function create()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            return view('admin.pendaftaran');
        } elseif($user->hasRole('student')) {
            $user_id = $user->id;
            $collage = CollegeStudent::where(["user_id"=>$user_id])->get()->all();
            foreach($collage as $row){
                if($row){
                    return view("mahasiswa.pendaftaran", ["row"=>$row]);
                }else{
                    Session::flash('message', "Special message goes here");
                    return redirect("mahasiswa/profile");
                }
            }
        }
    }
   

}
