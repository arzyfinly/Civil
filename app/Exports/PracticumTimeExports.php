<?php

namespace App\Exports;

use App\Models\PracticumTime;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PracticumTimeExports implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $no = 1;
        return view('admin.praktikum.practicumTime.exportExcel', [
            'practicum'=>PracticumTime::all(),
            'no'=>$no
        ]);
    }
}
