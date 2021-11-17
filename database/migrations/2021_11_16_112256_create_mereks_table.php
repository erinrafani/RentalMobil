<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMereksTable extends Migration
{

    public function up()
    {
        Schema::create('mereks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_merek');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('mereks');
    }
}
