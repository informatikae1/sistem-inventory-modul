@extends('layout2.main')


@section('title', 'Data Produksi')


@section('container-fluid')
<!-- Begin Page Content -->

        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Data Produksi</h1>
            <p>
            <a href="/masterdata/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-30"></i>Tambah Data</a>
            <a href="/masterdata/cetaklaporan" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-sm text-white-30"></i>Cetak Laporan</a>
            </p>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Produksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>Kode Produksi</th>
                          <th>Tanggal Produksi</th>
                          <th>Nama Modul</th>
                          <th>Stok Masuk</th>
                          <th>Jumlah Notebook</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                        <tbody>
                        <?php $No = 0;?>
                            @foreach($produksi as $prd)
                            <?php $No++ ;?>
                            
                              <tr>
                                <td>{{ $No }}</td>
                                <th>{{ $prd->id}}</th>
                                <td>{{ $prd->tgl_produksi }}</td>
                                <th>{{ $prd->modul->nama_modul }}</th>
                                <th>{{ $prd->stok_masuk_id }}</th>
                                <th>{{ $prd->jml_notebook }}</th>
                                <td>
                                  <a class="btn btn-info btn-sm" href="/masterdata/edit/{{ $prd->id }}">Ubah</a>
                                  <a class="btn btn-danger btn-sm" href="/masterdata/hapus/{{ $prd->id }}">Hapus</a>
                                </td>
                              </tr>
                            @endforeach
                         </tbody> 
                </table>
            
                Halaman : {{ $produksi->currentPage() }}
                <br>
                {{ $produksi->links() }}
              </div>
            </div>
        </div>

        </div>
@endsection