<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollegeStudent;

class CollegeStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Muhammad Bagus',
                'last_name' => 'Raga Maulidi',
                'surename' => 'Raga',
                'user_id' => '2',
                'nim' => '71951120',
                'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
                'tgl_lahir' => '2001-05-24',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08198765432',
                'gender' => 'Laki - Laki',
            ],[
                'first_name' => 'Andy',
                'last_name' => 'Yulianto',
                'surename' => 'Andy',
                'user_id' => '3',
                'nim' => '71951121',
                'alamat' => 'Jl. Dewi Sartika 7, Bumi Sumekar Asri',
                'tgl_lahir' => '2001-07-27',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '0812345678',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '4',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '5',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '6',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '7',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '8',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '9',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '10',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '11',
                'nim' => '71951122',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
            ]
        ];
        foreach ($users as $user) {
            CollegeStudent::create($user);
        }            
    }
}
