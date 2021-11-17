<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $visible = ['name', 'nomor_hp', 'jenis_kelamin', 'agama', 'alamat', 'email', 'password'];
    protected $fillable = ['name', 'nomor_hp', 'jenis_kelamin', 'agama', 'alamat', 'email', 'password'];
    public $timestamps = true;

    public function bookings()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Booking', 'id_customer');
    }

    public function testimonis()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Testimoni', 'id_customer');
    }

    public function pembayarans()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Pembayaran', 'id_customer');
    }
}
