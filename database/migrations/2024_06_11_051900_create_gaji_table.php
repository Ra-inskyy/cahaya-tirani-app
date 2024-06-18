<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('karyawan_id');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->decimal('gaji_pokok', 15, 2);
            $table->decimal('transportasi', 15, 2);
            $table->decimal('uang_makan', 15, 2);
            $table->decimal('total_gaji', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('gajis', function (Blueprint $table) {
            $table->date('tanggal_gajian')->nullable();
            $table->dropColumn('bulan');
            $table->dropColumn('tahun');
        });
    }
}

