<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_booking')->unsigned();
            $table->bigInteger('id_customer')->unsigned();
            $table->integer('dp');
            $table->integer('kekurangan');
            $table->string('status');

            // fk
            $table->foreign('id_booking')->references('id')
            ->on('bookings')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_customer')->references('id')
            ->on('customers')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('pembayarans');
    }
}
