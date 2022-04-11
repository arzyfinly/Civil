<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Practicum;

class PracticumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practicums = [
            [
                'name' => 'Bahan',
                'price' => '140000',
            ],
            [
                'name' => 'Ilmu Ukur Tanah',
                'price' => '70000',
            ],
            [
                'name' => 'Perpetaan',
                'price' => '80000',
            ],
            [
                'name' => 'Hidrolika',
                'price' => '500000',
            ],
            [
                'name' => 'Perkerasan Jalan Raya',
                'price' => '160000',
            ],
            [
                'name' => 'Mekanika Tanah',
                'price' => '500000',
            ],
            [
                'name' => 'Beton',
                'price' => '125000',
            ],
        ];
        foreach ($practicums as $practicum){
            Practicum::create($practicum);
        }
    }
}
