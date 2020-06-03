@extends('layout.main')


@section('title', 'Data Cabang')


@section('container-fluid')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Data Cabang</h1>
            <a href="/cabang/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Cabang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-light">
                    <tr>
                      <th>ID</th>
                      <th>Nama Cabang</th>
                      <th>Alamat</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  	<tbody>
    		                @foreach($cabang as $c)
            							<tr>
            								<td>{{ $c->id }}</td>
            								<td>{{ $c->nama_cabang }}</td>
                            <td>{{ $c->alamat}}</td>
            								<td>
            									<a class="btn btn-info btn-sm" href="/cabang/edit/{{ $c->id }}">Ubah</a>
            									<a class="btn btn-danger btn-sm" href="/cabang/hapus/{{ $c->id }}"><i class="fas fa-plus fa-sm text-white-50"></i> Hapus</a>
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