@extends('layout.main')


@section('title', 'Data Penyerahan Modul')


@section('container-fluid')
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">Data Penyerahan</h1>
    <div class="d-sm-flex align-items-center justify-content-rigth mb-2">
      <a href="/penyerahan/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
      <a href="/peminjaman/cetak" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</a>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Penyerahan Modul</h6>
    </div>
    <div class="card-body">
      <div class="">         
        <table class="table table-bordered table-sm" id="" width="100%" cellspacing="0">
          <thead class="thead-light">
            <tr>
              <th>Tanggal Penyerahan</th>
              <th>Nama Murid</th>
              <th>Modul</th>
              <th>Cabang</th>
              <th>Kelas</th>
              <th>Detail</th>
              <th>Jumlah Modul</th>
              <th>Jumlah Notebook</th>
              <th>Pembayaran</th>
              <th>PIC Penyerahan</th>
              <th>Penyerahan Melalui</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($penyerahan as $pyh)
            <tr>
              <td>{{ $pyh->tgl_penyerahan }}</td>
              <td>{{ $pyh->nama_murid }}</td>
              <td>{{ $pyh->modul->nama_modul}}</td>
              <td>{{ $pyh->cabang->nama_cabang}}</td>
              <td>{{ $pyh->kelas }}</td>
              <td>{{ $pyh->Detail }}</td>
              <td>{{ $pyh->jml_modul }}</td>
              <td>{{ $pyh->jml_notebook }}</td>
              <td>{{ $pyh->pembayaran }}</td>
              <td>{{ $pyh->pic_pembayaran }}</td>
              <td>{{ $pyh->pengantar }}</td>
              <td>
               <a class="btn btn-info btn-sm" href="/penyerahan/edit/{{ $pyh->id }}">Ubah</a>
               <a class="btn btn-danger btn-sm" href="/penyerahan/hapus/{{ $pyh->id }}">Hapus</a>
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