<?php

namespace App\Http\Controllers;

use App\Models\PracticumRegistration;
use Illuminate\Http\Request;
use App\Models\Practicum;
use App\Models\User;
use App\Models\CollegeStudent;
use App\Http\Requests\PraktikumCreateRequest;


class PraktikumController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole('admin')) {
            $practicumregistrations = PracticumRegistration::all();
            $practicums = Practicum::all();
            return view('admin.praktikum.index', compact(
                'practicumregistrations','practicums'
            ));
        } else if (auth()->user()->hasRole('student')) {
            $practicumregistrations = PracticumRegistration::all();
            return view('mahasiswa.praktikum.index', compact(
                'practicumregistrations'
            ));
        }
    }
    public function create()
    {
        if (auth()->user()->hasRole('admin')) {
            $collegestudent = CollegeStudent::where('user_id', auth()->user()->id)->get();
            $practicums = Practicum::all();
            return view('admin.praktikum.index', compact(
                'collegestudent','practicums'
            ));
        } else if (auth()->user()->hasRole('student')) {
            $collegestudent = CollegeStudent::where('user_id', auth()->user()->id)->get();
            $practicums = Practicum::get()->all();
            return view('mahasiswa.praktikum.pendaftaranPraktikum.create', compact(
                'practicums','collegestudent'));
        }   
    }
    public function store(Request $request)
    {
        $data = $request->all();
        PracticumRegistration::create($data);
        // toast()->success('Data have been succesfully saved!');
        return redirect('praktikum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salary      = Salary::find($id);
        $users       = User::all();
        $salarytypes = SalaryType::all();
        return view('salary.edit', compact(
            'salary','salarytypes','users'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalaryUpdateRequest $request, $id)
    {
        $data = $request->all();
        $salary = Salary::find($id);
        $salary->update($data);
        toast()->success('Success', 'Data have been succesfully saved!');
        return redirect('salaries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salary::find($id);
        $salary->delete();
            return response()
                ->json(array(
                    'success' => true,
                    'title'   => 'Success',
                    'message' => 'Your file has been moved to trash!'
                ));
    }
    public function trash()
    {
        $data = Salary::onlyTrashed()
            ->paginate(5);
        return view('trash', compact(
            'data'
        ));
    }

    public function restore($id = null)
    {
        $model = Salary::onlyTrashed();
        if ($id != null) {
            $model->where('id', $id)->restore();
            return redirect()->route('trash');
        } else {
            $model->restore();
            return redirect()->route('trash');
        }
    }

    public function delete($id = null)
    {
        $model = Salary::onlyTrashed();
        if ($id != null) {
            $model->where('id', $id)->forceDelete();
            return redirect()->route('trash');
        } else {
            $model->forceDelete();
            return redirect()->route('trash');
        }
    }
}