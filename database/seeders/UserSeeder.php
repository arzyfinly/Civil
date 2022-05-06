<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'student']);

        $admin = User::create([
            'username' => 'admin',
            'nim' => '0000000000',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');
        
        $student = User::create([
            'username' => 'raga',
            'nim' => '2103191201',
            'password' => bcrypt('raga')
        ]);
        $student->assignRole('student');

        $student = User::create([
            'username' => 'andy',
            'nim' => '2103191202',
            'password' => bcrypt('andy')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'dani',
            'nim' => '2103191203',
            'password' => bcrypt('dani')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'aping',
            'nim' => '2103191204',
            'password' => bcrypt('aping')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'ayep',
            'nim' => '2103191205',
            'password' => bcrypt('ayep')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'sulton',
            'nim' => '2103191206',
            'password' => bcrypt('sulton')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'riko',
            'nim' => '2103191207',
            'password' => bcrypt('riko')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'puput',
            'nim' => '2103191208',
            'password' => bcrypt('puput')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'fiqry',
            'nim' => '2103191209',
            'password' => bcrypt('fiqry')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'alan',
            'nim' => '2103191210',
            'password' => bcrypt('alan')
        ]);
        $student->assignRole('student');
        
    }
}
