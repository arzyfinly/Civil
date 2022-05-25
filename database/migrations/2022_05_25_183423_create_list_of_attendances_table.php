<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListOfAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_of_attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_student_id')->constrained('college_students');
            $table->foreignId('practicum_registration_id')->constrained('practicum_registrations');
            $table->time('presence_time');
            $table->date('presence_day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_of_attendances');
    }
}
