<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = "pengembalian";

    // relasi tabel modul dengan tabel pengembalian
    public function modul()
    {
    	return $this->hasOne('App\Modul');
    }

    // relasi tabel cabang dengan tabel pengembalian
    public function cabang()
    {
    	return $this->hasOne('App\Cabang');
    }

    public function stok()
    {
        return $this->belongsTo('App\Stok');
    }
}
