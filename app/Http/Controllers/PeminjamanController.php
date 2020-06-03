<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Modul;
use App\Cabang;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $peminjaman = Peminjaman::paginate(10);
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modul = Modul::pluck( 'nama_modul', 'id'); 
        $cabang = Cabang::pluck('nama_cabang', 'id');

        return view('peminjaman.tambah', compact('modul','cabang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_pinjam' => 'required',
            'cabang_id' => 'required',
            'modul_id' => 'required',
            'kelas' => 'required',
            'jml_modul' => 'required',
            'nama_pengajar' => 'required'
        ]);

        Peminjaman::create([
            'tgl_pinjam' => $request->tgl_pinjam,
            'cabang_id' => $request->cabang_id,
            'modul_id' => $request->modul_id,
            'kelas' => $request->kelas,
            'jml_modul' => $request->jml_modul,
            'nama_pengajar' => $request->nama_pengajar
        ]);

        return redirect('/peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        
        $peminjaman = Peminjaman::find($id);
        $modul = Modul::pluck( 'nama_modul', 'id');
        $cabang = Cabang::pluck('nama_cabang', 'id');

        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'tgl_pinjam' => 'required',
            'cabang_id' => 'required',
            'modul_id' => 'required',
            'kelas' => 'required',
            'jml_modul' => 'required',
            'nama_pengajar' => 'required'
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->cabang_id = $request->cabang_id;
        $peminjaman->modul_id = $request->modul_id;
        $peminjaman->kelas = $request->kelas;
        $peminjaman->jml_modul = $request->jml_modul;
        $peminjaman->nama_pengajar = $request->nama_pengajar;
        $peminjaman->save();

        return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        
        return redirect('/peminjaman');
    }
}
