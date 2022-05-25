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
            $table->foreignId('practicum_registration_id')->constrained('practicum_registrations');
            $table->time('presence_time');
            $table->date('presence_day');
            $table->string('status');
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
