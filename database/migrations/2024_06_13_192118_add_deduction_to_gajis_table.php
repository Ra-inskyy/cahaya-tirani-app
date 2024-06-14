<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_deduction_to_gajis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeductionToGajisTable extends Migration
{
    public function up()
    {
        Schema::table('gajis', function (Blueprint $table) {
            $table->integer('deduction')->default(0);
        });
    }

    public function down()
    {
        Schema::table('gajis', function (Blueprint $table) {
            $table->dropColumn('deduction');
        });
    }
}
