<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pasar', function (Blueprint $table) {
            $table->bigIncrements('pasar_id');
            $table->string('pasar_nama')->nullable();
            $table->string('pasar_deskripsi')->nullable();
            $table->string('pasar_alamat')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->text('pasar_gambar')->nullable();
            $table->tinyInteger('pasar_status')->nullable();
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
        Schema::dropIfExists('pasar');
    }
}
