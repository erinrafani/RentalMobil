<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $visible = ['nama_merek'];
    protected $fillable = ['nama_merek'];
    public $timestamps = true;

    public function mobils()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->hasMany('App\Models\Mobil', 'id_merek');
    }
}
