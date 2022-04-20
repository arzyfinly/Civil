<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticumRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicum_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_student_id')->constrained('college_students');
            $table->foreignId('practicum_id')->constrained('practicums');
            $table->string('status_pembayaran')->default('0');
            $table->string('status')->default('0');
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
        Schema::dropIfExists('practicum_registrations');
    }
}
