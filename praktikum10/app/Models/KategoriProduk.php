<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    //hubungkan dengan database table kategori_produk
    protected $table = 'kategori_produk';

    //tentukan kolom yang di isi
    protected $fillable = [
        'nama'
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
