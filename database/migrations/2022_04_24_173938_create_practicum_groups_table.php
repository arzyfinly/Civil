<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticumGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicum_groups', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok');
            $table->foreignId('practicum_id')->constrained('practicums');
            $table->foreignId('college_student1_id')->constrained('college_students')->nullable();
            $table->foreignId('college_student2_id')->constrained('college_students')->nullable();
            $table->foreignId('college_student3_id')->constrained('college_students')->nullable();
            $table->foreignId('college_student4_id')->constrained('college_students')->nullable();
            $table->foreignId('college_student5_id')->constrained('college_students')->nullable();
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
        Schema::dropIfExists('practicum_groups');
    }
}
