<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    //hubungkan dengan database table produk
    protected $table = 'produk';

    public $timestamps = false;

    //tentukan kolom yang di isi

    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];

    //relasi table kategori_produk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    //fungsi tampil data relasi produk & kategori
    public static function getAllProduk()
    {
        // return DB::table('produk')->get();
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}
