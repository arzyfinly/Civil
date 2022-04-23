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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $id_user = Auth::user()->id;

        $collage = CollegeStudent::where(["user_id"=>$id_user])->first();
        $user = User::where(["id"=>$id_user])->get()->all();
        if($collage != null)
        {
            $collageStudent = CollegeStudent::where(["user_id"=>$id_user])->get()->all();
            foreach($collageStudent as $row){
                foreach($user as $u){
                    return view("mahasiswa.profile.index", ["row"=>$row, "u"=>$u, "collage"=>$collage, "user"=>$user]);
                }
            }
        }else{
            foreach($user as $u)
            {
                return view("mahasiswa.profile.index", ["collage"=>$collage, "u"=>$u]);
            }
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        CollegeStudent::create($data);
        // toast()->success('Data have been succesfully saved!');
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        CollegeStudent::find($id)->update($data);
        return redirect('/');
    }
}
