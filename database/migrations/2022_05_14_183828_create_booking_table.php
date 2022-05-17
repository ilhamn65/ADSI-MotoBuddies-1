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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('montir_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('nama_pelanggan');
            $table->string('no_telepon_pelanggan');
            $table->string('email_pelanggan')->nullable();
            $table->datetime('waktu_mulai');
            $table->datetime('perkiraan_waktu_selesai');
            $table->datetime('waktu_selesai')->nullable();
            $table->bigInteger('perkiraan_harga');
            $table->bigInteger('harga')->nullable();
            $table->decimal('discount')->nullable();
            $table->bigInteger('harga_akhir')->nullable();
            $table->boolean('batal');
            $table->text('alasan_batal')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
