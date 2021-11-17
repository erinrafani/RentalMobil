<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $visible = ['id_merek', 'nama_mobil', 'nomor_polisi', 'seat', 'bahan_bakar', 'status_mobil', 'tarif_mobil', 'tarif_sopir', 'gambar'];
    protected $fillable = ['id_merek', 'nama_mobil', 'nomor_polisi', 'seat', 'bahan_bakar', 'status_mobil', 'tarif_mobil', 'tarif_sopir', 'gambar'];
    public $timestamps = true;

    public function mereks()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Merek', 'id');
    }
}
