<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticumAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicum_attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_student_id')->constrained('college_students');
            $table->foreignId('practicum_id')->constrained('practicums');
            $table->foreignId('practicum_group_id')->constrained('practicum_groups');
            $table->string('status');
            $table->dateTime('present_time');
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
        Schema::dropIfExists('practicum_attendances');
    }
}
