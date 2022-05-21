<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralInventaris;

class GeneralInventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = [
            [
                'tool_name' => 'Cetakan Beton Kubus',
                'price' => '20000',
                'stock' => '5',
            ],
            [
                'tool_name' => 'Cetakan Beton Silinder',
                'price' => '20000',
                'stock' => '10',
            ],
            [
                'tool_name' => 'Slump Tes Set',
                'price' => '20000',
                'stock' => '8',
            ],
            [
                'tool_name' => 'Waterpass',
                'price' => '110000',
                'stock' => '4',
            ],
            [
                'tool_name' => 'Theodolit',
                'price' => '170000',
                'stock' => '7',
            ],
        ];
        foreach ($general as $generals){
            GeneralInventaris::create($generals);
        }
    }
}
