<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal_gajian');
            $table->decimal('gaji_pokok', 15, 2);
            $table->decimal('transportasi', 15, 2);
            $table->decimal('uang_makan', 15, 2);
            $table->decimal('total_gaji', 15, 2);
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}

