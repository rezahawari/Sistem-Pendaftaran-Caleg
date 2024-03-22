<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDapilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dapils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dapil', 50);
            $table->string('wilayah');
            $table->string('pemilih',10)->default('0');
            $table->string('kuota', 10)->default('0');
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
        Schema::dropIfExists('dapils');
    }
}
