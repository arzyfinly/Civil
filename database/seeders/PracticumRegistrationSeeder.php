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
                'college_student_id' => '1',
                'practicum_id' => '1',
                'status_pembayaran' => '2',
                'status' => 'pending',
            ],[
                'college_student_id' => '2',
                'practicum_id' => '2',
                'status_pembayaran' => '1',
                'status' => 'accepted',
            ]
        ];
        foreach ($practicum_registrations as $practicum_registration){
            PracticumRegistration::create($practicum_registration);
        }
    }
}
