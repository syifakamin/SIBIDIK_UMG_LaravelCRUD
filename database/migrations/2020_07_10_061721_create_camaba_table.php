<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamabaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camaba', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('Jenis Kelamin');
            $table->string('Program Studi');
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
        Schema::dropIfExists('camaba');
    }
}
