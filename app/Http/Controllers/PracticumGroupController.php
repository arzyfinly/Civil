<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use DB;
use App\Models\CollegeStudent;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PraktikumCreateRequest;
use PDF;


class PracticumGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('admin')){
            $practicumregistrations = PracticumRegistration::whereNotNull('group')->get()->all();
            if($practicumregistrations != null)
            {
                foreach($practicumregistrations as $row)
                {
                    $practicum = Practicum::all();
                    return view('admin.praktikum.practicumGroup.index', compact(
                        'practicumregistrations','row','practicum'
                    ));
                }
            }else{
                $practicum = Practicum::all();
                return view('admin.praktikum.practicumGroup.index', compact(
                    'practicumregistrations', 'practicum'
                ));
            }
        }else{
            echo "Nothing";
        }
    }

    public function GetCollegeStudent($id) {
        $college = PracticumRegistration::where(['practicum_id'=>$id, 'status_pembayaran'=>1, 'status'=>1])
                ->whereNull('group')
                ->get()->all();
        return response()->json($college, 200);
    }

    public function getID($id)
    {
        $practicumregistration = PracticumRegistration::find($id);
        return response()->json($practicumregistration, 200);
    }

    public function getClass($id)
    {
        $practicum = array();
        $class = CollegeStudent::where(['kelas'=>$id])
        ->get()->all();

        foreach ($class as $value) {
            $practicum[] = PracticumRegistration::where(['college_student_id'=>$value->id, 'status_pembayaran'=>1, 'status'=>1])
                    ->whereNotNull('group')
                    ->get()->all();
        }

        return response()->json($practicum, 200);
    }

    public function store(Request $request){
        $data = $request->all();
        $id = $data['pracreg_id'];
        $practicum_registration = PracticumRegistration::find($id);
        $practicum_registration->group = $data['group'];
        $practicum_registration->save();
        Alert::success('Success', 'Data have been succesfully saved!');
        return redirect('kelompok');
    }

    public function destroy($id)
    {
            $practicumRegistration = PracticumRegistration::find($id);
            $practicumRegistration->group = null;
            $practicumRegistration->save();
    }

    public function pdf(Request $request)
    {
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y')
        // ];

        // $pdf = PDF::loadView('myPDF', $data);

        // return $pdf->download('itsolutionstuff.pdf');
    }

    public function edit($id)
    {
        $practicumGroup = PracticumRegistration::find($id);

        return view('admin.praktikum.practicumGroup.edit', compact('practicumGroup'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $practicumGroup = PracticumRegistration::find($id);
        $practicumGroup->update($data);
        toast()->success('Success', 'Data have been succesfully saved!');
        return redirect()->route('kelompok.index');
    }
}
