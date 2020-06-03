<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";

    protected $fillable = ['tgl_pinjam', 'cabang_id', 'modul_id', 'kelas', 'jml_modul', 'nama_pengajar'];

    // relasi tabel modul dengan tabel peminjaman
    public function modul()
    {
    	return $this->belongsTo(Modul::class);
    }

    // relasi tabel cabang dengan tabel peminjaman
    public function cabang()
    {
    	return $this->belongsTo(Cabang::class);
    }

    // relasi tabel stok dengan tabel peminjaman
    public function stok()
    {
        return $this->belongsTo('App\Stok');
    }
    
}
