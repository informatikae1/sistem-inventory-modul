@extends('layout.main')


@section('title', 'Data Modul')


@section('container-fluid')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Data Modul</h1>
            <a href="/modul/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
          </div>
          <div class="card shadow mb-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Modul</h6>
            </div>
            <div class="card-body text-dark">
              <div class="table-responsive text-dark">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                 <thead class="thead-light">
                        <tr class="table-primary">
                          <th class="">ID</th>
                          <th>Nama Modul</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                        <tbody>
                            @foreach($modul as $mdl)
                              <tr>
                                <td>{{ $mdl->id }}</td>
                                <td>{{ $mdl->nama_modul }}</td>
                                <td>
                                  <a class="btn btn-info btn-sm" href="/modul/edit/{{ $mdl->id }}">Ubah</a>
                                  <a class="btn btn-danger btn-sm" href="/modul/hapus/{{ $mdl->id }}">Hapus</a>
                                </td>
                              </tr>
                            @endforeach
                         </tbody> 
                </table>
            
                Halaman : {{ $modul->currentPage() }}
                <br>
                {{ $modul->links() }}
              </div>
            </div>
        </div>

        </div>
@endsection