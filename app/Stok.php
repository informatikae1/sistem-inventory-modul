<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = "stok";

    // relasi tabel modul dengan tabel stok
    public function modul()
    {
    	return this->hasOne('App\Modul');
    }

    // relasi tabel modul dengan tabel peminjaman
    public function peminjaman()
    {
    	return $this->hasOne('App\Peminjaman');
    }

    // relasi tabel stok dengan tabel pengembalian
    public function pengembalian()
    {
    	return $this->hasOne('App\Pengembalian');
    }
}
