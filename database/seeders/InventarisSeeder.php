<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventaris;

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
                'tool_name'     => 'Cetakan Beton Kubus',
                'general_price' => '20000',
                'college_price' => '20000',
                'stock'         => '5',
            ],
            [
                'tool_name'     => 'Cetakan Beton Silinder',
                'general_price' => '20000',
                'college_price' => '20000',
                'stock'         => '10',
            ],
            [
                'tool_name'     => 'Slump Tes Set',
                'general_price' => '20000',
                'college_price' => '20000',
                'stock'         => '8',
            ],
            [
                'tool_name'     => 'Waterpass',
                'general_price' => '110000',
                'college_price' => '90000',
                'stock'         => '4',
            ],
            [
                'tool_name'     => 'Theodolit',
                'general_price' => '170000',
                'college_price' => '145000',
                'stock'         => '7',
            ],
        ];
        foreach ($item as $row){
            Inventaris::create($row);
        }
    }
}
