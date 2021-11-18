<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $visible = ['id_customer', 'testimoni'];
    protected $fillable = ['id_customer', 'testimoni'];
    public $timestamps = true;

    public function customers()
    {
        //data model "author" bisa memiliki banyak data
        //dari model "book" melalui fk "author_id"
        $this->belongsTo('App\Models\Customer', 'id');
    }
}
