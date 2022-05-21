<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            [
                'item'          => 'Alat Ukur',
                'general_price' => '25000',
                'college_price' => '10000',
                'stock'         => 4,
            ],
            [
                'item'          => 'Alat Berat',
                'general_price' => '35000',
                'college_price' => '20000',
                'stock'         => 2,
            ],
        ];
        foreach ($item as $row){
            Inventaris::create($row);
        }
    }
}
