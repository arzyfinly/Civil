<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PracticumRegistration;


class PracticumRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practicum_registrations = [
            [
                'user_id' => '2',
                'practicum_price_id' => '1',
                'status' => 'pending',
            ],[
                'user_id' => '3',
                'practicum_price_id' => '2',
                'status' => 'accepted',
            ]
        ];
        foreach ($practicum_registrations as $practicum_registration){
            PracticumRegistration::create($practicum_registration);
        }
    }
}
