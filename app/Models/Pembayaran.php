<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $visible = ['id_booking', 'id_customer', 'dp', 'kekurangan', 'status'];
    protected $fillable = ['id_booking', 'id_customer', 'dp', 'kekurangan', 'status'];
    public $timestamps = true;

    public function customers()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Customer', 'id_customer');
    }

    public function bookings()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->belongsTo('App\Models\Booking', 'id');
    }
}
