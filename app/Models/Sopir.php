<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;

    protected $visible = ['nama_sopir', 'status'];
    protected $fillable = ['nama_sopir', 'status'];
    public $timestamps = true;

    public function bookings()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Booking', 'id_sopir');
    }
}
