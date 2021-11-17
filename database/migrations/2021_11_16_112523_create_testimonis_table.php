<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonisTable extends Migration
{

    public function up()
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_customer')->unsigned();
            $table->string('testimoni');

            //fk
            $table->foreign('id_customer')->references('id')
            ->on('customers')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('testimonis');
    }
}
