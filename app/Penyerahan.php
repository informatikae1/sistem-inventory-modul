<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyerahan extends Model
{
    protected $table = "penyerahan";

    protected $fillable = ['tgl_penyerahan', 'modul_id','cabang_id', 'kelas', 'detail', 'jml_modul','jml_notebook', 'pembayaran', 'pic_pembayaran', 'pengantar'];

    // relasi tabel modul dengan tabel penyerahan
    public function modul()
    {
    	return $this->belongsTo(Modul::class);
    }

    // relasi tabel cabang dengan tabel penyerahan
    public function cabang()
    {
    	return $this->belongsTo(Cabang::class);
    }
}
