<?php

// database/migrations/xxxx_xx_xx_create_absens_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensTable extends Migration
{
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->integer('hadir');
            $table->integer('sakit');
            $table->integer('alpha');
            $table->date('bulan');
            $table->date('tahun');
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('absens');
    }
}
