<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{

    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_merek')->unsigned();
            $table->string('nama_mobil');
            $table->string('nomor_polisi');
            $table->integer('seat');
            $table->string('bahan_bakar');
            $table->string('status_mobil');
            $table->integer('tarif_mobil');
            $table->integer('tarif_sopir');
            $table->string('gambar')->nullable();

            // fk
            $table->foreign('id_merek')->references('id')
            ->on('mereks')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}
