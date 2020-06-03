<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = "cabang";

    protected $fillable = ['id', 'nama_cabang', 'alamat'];

    // relasi tabel cabang dengan tabel penyerahan
    public function penyerahan()
    {
    	return $this->belongsTo('App\Penyerahan');
    }

    // relasi tabel cabang dengan tabel penyerahan


    // relasi tabel cabang dengan tabel penyerahan
    public function pengembalian()
    {
    	return $this->belongsTo('App\Pengembalian');
    }
}
