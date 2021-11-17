<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $visible = ['name', 'email', 'password'];
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = true;

    public function bookings()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Booking', 'id_admin');
    }

}
