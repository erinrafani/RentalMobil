<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $visible = ['id_mobil', 'id_customer', 'id_sopir', 'id_admin', 'tanggal_booking', 'tanggal_mulai', 'tanggal_selesai', 'tanggal_kembali', 'denda', 'durasi', 'status', 'jumlah_bayar', 'jumlah_dp'];
    protected $fillable = ['id_mobil', 'id_customer', 'id_sopir', 'id_admin', 'tanggal_booking', 'tanggal_mulai', 'tanggal_selesai', 'tanggal_kembali', 'denda', 'durasi', 'status', 'jumlah_bayar', 'jumlah_dp'];
    public $timestamps = true;


    public function mobils()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Mobil', 'id');
    }

    public function admins()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Admin', 'id');
    }

    public function sopirs()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Sopir', 'id');
    }

    public function customers()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Customer', 'id');
    }

    public function pembayarans()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->hasMany('App\Models\Pembayaran', 'id_booking');
    }
}
