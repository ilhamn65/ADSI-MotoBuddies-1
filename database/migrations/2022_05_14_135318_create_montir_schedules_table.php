<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montir_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('montir_id')->nullable()->constrained()->onDelete('cascade');
            $table->datetime('mulai');
            $table->datetime('selesai');
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
        Schema::dropIfExists('montir_schedules');
    }
};
