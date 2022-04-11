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

        $collage = CollegeStudent::where(["user_id"=>$id_user])->first();
        $user = User::where(["id"=>$id_user])->get()->all();
        if($collage != null)
        {
            foreach($collage as $row){
                foreach($user as $u){
                    return view("mahasiswa.profile", ["row"=>$row, "u"=>$u]);
                }
            }
        }else{
            foreach($user as $u)
            {
                return view("mahasiswa.profile", ["collage"=>$collage, "u"=>$u]);
            }
        }
    }
}
