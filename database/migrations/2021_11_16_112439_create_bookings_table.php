<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_mobil')->unsigned();
            $table->bigInteger('id_customer')->unsigned();
            $table->bigInteger('id_sopir')->unsigned();
            $table->bigInteger('id_admin')->unsigned();
            $table->date('tanggal_booking');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->date('tanggal_kembali');
            $table->integer('denda');
            $table->string('durasi');
            $table->string('status');
            $table->integer('jumlah_bayar');
            $table->integer('jumlah_dp');

            // fk
            $table->foreign('id_mobil')->references('id')
            ->on('mobils')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_customer')->references('id')
            ->on('customers')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_sopir')->references('id')
            ->on('sopirs')->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('id_admin')->references('id')
            ->on('admins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
