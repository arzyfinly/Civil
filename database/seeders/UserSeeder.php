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
        Role::create(['name' => 'student']);
        Role::create(['name' => 'admin']);

        $student = User::create([
            'username' => 'student',
            'email' => 'student@student.net',
            'password' => bcrypt('student')
        ]);
        $student->assignRole('student');
        
        $admin = User::create([
            'username' => 'admin',
            'email' => 'admin@admin.net',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

    }
}
