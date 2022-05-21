<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LecturerInventaris;

class LecturerInventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = [
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
                'price' => '90000',
                'stock' => '4',
            ],
            [
                'tool_name' => 'Theodolit',
                'price' => '145000',
                'stock' => '7',
            ],
        ];
        foreach ($lecturer as $lecturers){
            LecturerInventaris::create($lecturers);
        }
    }
}
