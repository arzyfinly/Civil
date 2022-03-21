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
            'username' => 'arzyfinly',
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
        
    }
}
