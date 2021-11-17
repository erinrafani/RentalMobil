<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nomor_hp');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
