@extends('layout.main')


@section('title', 'Data Peminjaman')


@section('container-fluid')
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Data Peminjaman</h1>
    <div class="d-sm-flex align-items-center justify-content-rigth mb-2">
      <a href="/peminjaman/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
      <a href="/peminjaman/cetak" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-light">
            <tr>
              <th>Tanggal</th>
              <th>Cabang</th>
              <th>Nama Modul</th>
              <th>Kelas</th>
              <th>Jumlah Modul</th>
              <th>Nama Pengajar</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($peminjaman as $pj)
            <tr>
              <td>{{ $pj->tgl_pinjam }}</td>
              <td>{{ $pj->cabang->nama_cabang}}</td>
              <td>{{ $pj->modul->nama_modul}}</td>
              <td>{{ $pj->kelas }}</td>
              <td>{{ $pj->jml_modul }}</td>
              <td>{{ $pj->nama_pengajar }}</td>
              <td>
               <a class="btn btn-info btn-sm" href="/peminjaman/edit/{{ $pj->id }}">Ubah</a>
               <a class="btn btn-danger btn-sm" href="/peminjaman/hapus/{{ $pj->id }}"><i class="fas fa-delete fa-sm text-white-50"></i>Hapus</a>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>

</div>
        <!-- /.container-fluid -->
@endsection