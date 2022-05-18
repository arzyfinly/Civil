<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticumTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicum_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('practicum_id')->constrained('practicums');
            $table->time('start_time_in_day');
            $table->time('end_time_in_day');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('kelas');
            $table->year('tahun');
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
        Schema::dropIfExists('practicum_times');
    }
}
