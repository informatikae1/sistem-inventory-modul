<?php

namespace App\Http\Controllers;

use App\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = Cabang::all();
        return view('cabang.index', compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cabang = new Cabang;
        $cabang->id = $request->id;
        $cabang->nama_cabang = $request->nama_cabang;
        $cabang->alamat = $request->alamat;
        $cabang->save();

        return redirect('/cabang');
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
        $cabang = Cabang::find($id);
        return view('Cabang.edit', ['cabang'=> $cabang]);
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
            'id' => 'required',
            'nama_cabang' => 'required',
            'alamat' => 'required'
        ]);

        $cabang = Cabang::find($id);
        $cabang->id = $request->id;
        $cabang->nama_cabang = $request->nama_cabang;
        $cabang->alamat = $request->alamat;
        $cabang->save();

        return redirect('/cabang');
    }

    public function delete($id)
    {
        $cabang = Cabang::find($id);
        $cabang->delete();
        
        return redirect('/cabang');
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
}
