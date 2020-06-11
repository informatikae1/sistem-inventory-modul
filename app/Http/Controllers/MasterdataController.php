<?php
namespace App\Http\Controllers;


use App\Produksi;
use App\Modul;
use Illuminate\Http\Request;


class MasterdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan data dari masterdata
        $produksi = Produksi::paginate(10);
        return view('produksi.masterdata.index', compact('produksi'));

    }
    public function create()
    {
        /**return view('produksi.masterdata.create');*/
        $modul = Modul::pluck('nama_modul', 'id');
        
        return view('produksi.masterdata.create', compact('modul'));
    }    

    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_produksi' => 'required',
            'modul_id' => 'required',
            'stok_masuk_id' => 'required',
            'jml_notebook' => 'required'
        ]);

        Produksi::create([
            'tgl_produksi' => $request->tgl_produksi,
            'modul_id' => $request->modul_id,
            'stok_modul_id' => $request->stok_masuk_id,
            'jml_nootebook' => $request->jml_notebook
        ]);

        return redirect('/masterdata');
    }

    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $produksi = Produksi::find($id);
        $modul = Modul::pluck('nama_modul', 'id');

        return view('masterdata.edit', compact('produksi'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tgl_produksi' => 'required',
            'modul_id' => 'required',
            'stok_masuk_id' => 'required',
            'jml_notebook' => 'required',
        ]);
 
            $produksi = Produksi::find($id);
            $produksi->tgl_produksi = $request->tgl_produksi;
            $produksi->modul_id = $request->modul_id;
            $produksi->stok_masuk_id = $request->stok_masuk_id;
            $produksi->jml_notebook = $request->jml_notebook;
            $produksi->save();

        return redirect('/masterdata');

    }

    public function delete($id)
    {
        $produksi = Produksi::find($id);
        $produksi->delete();
        return redirect('/masterdata');
    }  

    public function cetak_pdf()
    {
    	$produksi = Produksi::all();

    	$pdf = PDF::loadview('index')->setPaper('A4','potrait');
    	return $pdf->download('laporan-produksi-pdf');
    }

    //public function store(Request $request)
   // {
      //  $produksi = new Produksi;
      //  $produksi->tgl_produksi = $request->tgl_produksi;
      //  $produksi->modul_id = $request->modul_id;
      //  $produksi->stok_masuk_id = $request->stok_masuk_id;
       // $produksi->jml_notebook = $request->jml_notebook;
     //   $produksi->save();
       // return redirect('/formproduksi');
   // }
}
