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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('tipe_kendaraan');
            $table->string('merek_kendaraan');
            $table->string('model_kendaraan');
            $table->string('plat_nomor_kendaraan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('jenis_kendaraan');
            $table->dropColumn('merek_kendaraan');
            $table->dropColumn('model_kendaraan');
            $table->dropColumn('plat_nomor_kendaraan');
        });
    }
};
