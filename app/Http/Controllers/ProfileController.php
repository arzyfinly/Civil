<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CollegeStudent;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Session;

class ProfileController extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;

        $collage = CollegeStudent::where(["user_id"=>$id_user])->get()->all();
        $user = User::where(["id"=>$id_user])->get()->all();
        foreach($collage as $row){
            foreach($user as $u){
                return view("mahasiswa.profile", ["row"=>$row, "u"=>$u]);
            }
        }
    }
}
