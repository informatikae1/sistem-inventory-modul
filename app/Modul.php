<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = "modul";

    protected $fillable = ['id', 'nama_modul'];

    // relasi tabel modul dengan tabel produksi
    public function produksi()
    {
    	return $this->belongsTo('App\Produksi');
    }

    // relasi tabel modul dengan tabel penyerahan
    public function penyerahan()
    {
    	return $this->belongsTo('App\Penyerahan');
    }


    // relasi tabel modul dengan tabel pengembalian
    public function pengembalian()
    {
    	return $this->belongsTo('App\Pengembalian');
    }

    // relasi tabel modul dengan tabel stok
    public function stok()
    {
    	return $this->belongsTo('App\Stok');
    }
}
