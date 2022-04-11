<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollegeStudent;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\PendaftaranPraktikumRequest;
use Spatie\Permission\Models\Role;
use Session;


class PendaftaranPraktikumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        dd($user->hasRole('student'));
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
            echo "Nothing";
        }
    }
    public function store(PendaftaranPraktikumRequest $request)
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            return view('admin.pendaftaran');
        } elseif($user->hasRole('student')) {
            
            $data = $request->validated();
            $pendaftaran_praktikum = PendaftaranPraktikum::create($data);
    
            if($pendaftaran_praktikum){
                Session::flash('message', "Success");
                return redirect()->route('/pendaftaran/praktikum');
            } else {
                Session::flash('message', "Failed");
                return redirect()->route('/pendaftaran/praktikum');
            }
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
