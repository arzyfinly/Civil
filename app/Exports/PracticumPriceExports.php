<?php

namespace App\Exports;

use App\Models\Practicum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PracticumPriceExports implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $no = 1;
        return view('admin.praktikum.practicumPrice.exportExcel', [
            'practicum'=>Practicum::all(),
            'no'=>$no
        ]);
    }
}
