<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = "produksi";
    protected $fillable = ['tgl_produksi','modul_id','stok_masuk_id','jml_notebook'];

    // relasi tabel produksi dengan tabel modul
    public function modul()
    {
    	return $this->belongsTo('App\Modul');
    }

    //relasi tabel modul dengan tabel produksi
    public function stok_masuk()
    {
        return $this->hasOne('App\stok_masuk');
    }

}
