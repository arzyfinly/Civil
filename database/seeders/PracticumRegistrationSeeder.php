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
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '2',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '3',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '4',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '5',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '6',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '7',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '8',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '9',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
            ,[
                'college_student_id' => '10',
                'practicum_id' => '1',
                'status_pembayaran' => '1',
                'status' => '1',
            ]
        ];
        foreach ($practicum_registrations as $practicum_registration){
            PracticumRegistration::create($practicum_registration);
        }
    }
}
