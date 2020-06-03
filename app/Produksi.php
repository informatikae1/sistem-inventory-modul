<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = "produksi";

    // relasi tabel produksi dengan tabel modul
    public function modul()
    {
    	return $this->hasOne('App\Modul');
    }
}
