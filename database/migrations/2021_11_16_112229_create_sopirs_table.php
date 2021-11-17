<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSopirsTable extends Migration
{

    public function up()
    {
        Schema::create('sopirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sopir');
            $table->string('status');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sopirs');
    }
}
