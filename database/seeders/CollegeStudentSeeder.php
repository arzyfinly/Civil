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
                'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
                'tgl_lahir' => '2001-05-24',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08198765432',
                'gender' => 'Laki - Laki',
                'kelas' => 'A'
            ],[
                'first_name' => 'Andy',
                'last_name' => 'Yulianto',
                'surename' => 'Andy',
                'user_id' => '3',
                'alamat' => 'Jl. Dewi Sartika 7, Bumi Sumekar Asri',
                'tgl_lahir' => '2001-07-27',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '0812345678',
                'gender' => 'Laki - Laki',
                'kelas' => 'A'
            ]
            ,[
                'first_name' => 'Ahmad Rizal',
                'last_name' => 'Ramadani',
                'surename' => 'Dani',
                'user_id' => '4',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'A'
            ]
            ,[
                'first_name' => 'Mamat Zaini',
                'last_name' => 'Ahmad',
                'surename' => 'Zaini',
                'user_id' => '5',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'A'
            ]
            ,[
                'first_name' => 'Andi',
                'last_name' => 'Rahmatullah',
                'surename' => 'Rahmat',
                'user_id' => '6',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'A'
            ]
            ,[
                'first_name' => 'Dani Ingkar',
                'last_name' => 'Maulana',
                'surename' => 'Ingkar',
                'user_id' => '7',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'B'
            ]
            ,[
                'first_name' => 'Suryo',
                'last_name' => 'Mulyadi',
                'surename' => 'Suryo',
                'user_id' => '8',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'B'
            ]
            ,[
                'first_name' => 'Ahmad Sutoyo',
                'last_name' => 'Malik',
                'surename' => 'Toyo',
                'user_id' => '9',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'B'
            ]
            ,[
                'first_name' => 'Yanto Andhika',
                'last_name' => 'Putra',
                'surename' => 'Anto',
                'user_id' => '10',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Laki - Laki',
                'kelas' => 'B'
            ]
            ,[
                'first_name' => 'Marwa Indra',
                'last_name' => 'Sukinem',
                'surename' => 'Inem',
                'user_id' => '11',
                'alamat' => 'Jl. Kh. Mansyur III.  No 26 ',
                'tgl_lahir' => '2000-12-04',
                'tmpt_lahir' => 'Sumenep',
                'no_hp' => '08166677788',
                'gender' => 'Perempuan',
                'kelas' => 'B'
            ]
        ];
        foreach ($users as $user) {
            CollegeStudent::create($user);
        }            
    }
}
