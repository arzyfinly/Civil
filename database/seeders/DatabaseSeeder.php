<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PracticumSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CollegeStudentSeeder::class);
        $this->call(PracticumRegistrationSeeder::class);
        $this->call(PracticumTimeSeeder::class);
        $this->call(GeneralInventarisSeeder::class);
        $this->call(LecturerInventarisSeeder::class);
    }
}
