<?php

namespace App\Exports;

use App\Models\PracticumRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PracticumGroupExports implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $no = 1;
        $practicum = PracticumRegistration::whereNotNull('group')->get()->all();
        return view('admin.praktikum.practicumGroup.exportExcel', [
            'practicum'=>$practicum,
            'no'=>$no
        ]);
    }
}
