<?php

namespace App\Http\Controllers;

use App\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan data dari modul
        $modul = Modul::paginate(10);
        return view('modul.index', compact('modul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $modul = new Modul;
        $modul->id = $request->id;
        $modul->nama_modul = $request->nama_modul;
        $modul->save();

        return redirect('/modul');
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
        // metode untuk dapat mengedit di dalam database
        $modul = Modul::find($id);
        return view('modul.edit', ['modul'=> $modul]); 
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
            'nama_modul' => 'required'
        ]);

        $modul = Modul::find($id);
        $modul->id = $request->id;
        $modul->nama_modul = $request->nama_modul;
        $modul->save();

        return redirect('/modul');
    }


    public function delete($id)
    {
        $modul = Modul::find($id);
        $modul->delete();
        
        return redirect('/modul');
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
