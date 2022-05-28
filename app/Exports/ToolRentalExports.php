<?php

namespace App\Exports;

use App\Models\ToolRental;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ToolRentalExports implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        $no = 1;
        return view('admin.toolRental.exportExcel', [
            'ToolRental'=>ToolRental::all(),
            'no'=>$no
        ]);
    }
}
