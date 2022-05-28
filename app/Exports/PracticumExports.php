<?php

namespace App\Exports;

use App\Models\PracticumRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PracticumExports implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $no = 1;
        $practicum = PracticumRegistration::whereNull('group')->get()->all();
        return view('admin.praktikum.exportExcel', [
            'practicum'=>$practicum,
            'no'=>$no
        ]);
    }
}
