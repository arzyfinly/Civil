<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaPelaksanaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ba_pelaksanaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('practicum_registration_id')->constrained('practicum_registrations');
            $table->string('attitude')->nullable();
            $table->string('liveliness')->nullable();
            $table->string('tool_mastery')->nullable();
            $table->string('material_mastery')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
        });

        // status
        // 0 belum dinilai
        // 1 sudah nilai
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ba_pelaksanaans');
    }
}
