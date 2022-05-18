<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PracticumTime;
use Carbon\Carbon;

class PracticumTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $practicumtimes = [
            [
                'practicum_id'      => '1',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'A',
                'tahun'             => Carbon::now()->year,
            ],
            [
                'practicum_id'      => '1',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'B',
                'tahun'             => Carbon::now()->year,
            ],
            [
                'practicum_id'      => '2',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'A',
                'tahun'             => Carbon::now()->year,
            ],
            [
                'practicum_id'      => '2',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'B',
                'tahun'             => Carbon::now()->year,
            ],
            [
                'practicum_id'      => '3',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'A',
                'tahun'             => Carbon::now()->year,
            ],
            [
                'practicum_id'      => '3',
                'start_time_in_day' => Carbon::CreateFromTime(7,15,0),
                'end_time_in_day'   => Carbon::CreateFromTime(17,0,0),
                'start_date'        => Carbon::Create(2022,7,1,0),
                'end_date'          => Carbon::Create(2022,7,3,0),
                'kelas'             => 'B',
                'tahun'             => Carbon::now()->year,
            ]
            
        ];
        foreach ($practicumtimes as $row){
            PracticumTime::create($row);
        }
    }
}
