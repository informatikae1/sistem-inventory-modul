<?php

namespace App\Http\Controllers;

use App\Penyerahan;
use App\Modul;
use App\Cabang;
use Illuminate\Http\Request;

class PenyerahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyerahan = Penyerahan::paginate(10);
        return view('penyerahan.index', compact('penyerahan'));
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
        return view('penyerahan.tambah', compact('modul','cabang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $penyerahan = new Penyerahan;
       $penyerahan->tgl_penyerahan = $request->tgl_penyerahan;
       $penyerahan->nama_murid = $request->nama_murid;
       $penyerahan->modul_id = $request->modul_id;
       $penyerahan->cabang_id = $request->cabang_id;
       $penyerahan->kelas = $request->kelas;
       $penyerahan->detail = $request->detail;
       $penyerahan->jml_modul = $request->jml_modul;
       $penyerahan->jml_notebook = $request->jml_notebook;
       $penyerahan->pembayaran = $request->pembayaran;
       $penyerahan->pic_pembayaran = $request->pic_pembayaran;
       $penyerahan->pengantar = $request->pengantar;
       $penyerahan->save();

       return redirect('/penyerahan')->with('success', 'Data Berhasil Disimpan');
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
        $penyerahan = Penyerahan::find($id);
        $penyerahan->delete();
        
        return redirect('/penyerahan');
    }
}
