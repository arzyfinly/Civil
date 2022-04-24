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
            'email' => 'admin@admin.net',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');
        
        $student = User::create([
            'username' => 'raga',
            'email' => 'raga@student.net',
            'password' => bcrypt('raga')
        ]);
        $student->assignRole('student');

        $student = User::create([
            'username' => 'andy',
            'email' => 'andy@student.net',
            'password' => bcrypt('andy')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'dani',
            'email' => 'dani@student.net',
            'password' => bcrypt('dani')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'aping',
            'email' => 'aping@student.net',
            'password' => bcrypt('aping')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'ayep',
            'email' => 'ayep@student.net',
            'password' => bcrypt('ayep')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'sulton',
            'email' => 'sulton@student.net',
            'password' => bcrypt('sulton')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'riko',
            'email' => 'riko@student.net',
            'password' => bcrypt('riko')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'puput',
            'email' => 'puput@student.net',
            'password' => bcrypt('puput')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'fiqry',
            'email' => 'fiqry@student.net',
            'password' => bcrypt('fiqry')
        ]);
        $student->assignRole('student');
        
        $student = User::create([
            'username' => 'alan',
            'email' => 'alan@student.net',
            'password' => bcrypt('alan')
        ]);
        $student->assignRole('student');
        
    }
}
