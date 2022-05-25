<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToolRental;

class ToolRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toolrental = [
            [
                'inventaris_id'    =>     "1",
                'tenant'           =>     "Sarifudin",
                'number_of_loan'   =>     "1",
                'type'             =>     "General",
                'rent_of_day'      =>     "2",
                'total_price'      =>     "40000",
            ],
            [
                'inventaris_id'    =>     "2",
                'tenant'           =>     "Raga",
                'number_of_loan'   =>     "2",
                'type'             =>     "Mahasiswa",
                'rent_of_day'      =>     "2",
                'total_price'      =>     "60000",
            ],
            [
                'inventaris_id'    =>     "3",
                'tenant'           =>     "Fuad",
                'number_of_loan'   =>     "1",
                'type'             =>     "Dosen",
                'rent_of_day'      =>     "2",
                'total_price'      =>     "30000",
            ],
        ];
        foreach ($toolrental as $row){
            ToolRental::create($row);
        }
    }
}
