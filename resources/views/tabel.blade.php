@extends('layout.main')


@section('title', 'Data Modul')


@section('container-fluid')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  	<tbody>
		                @foreach($tabel as $tbl)
							<tr>
								<td>{{ $tbl->id }}</td>
								<td>{{ $tbl->nama_modul }}</td>
								<td>
									<a class="btn btn-info btn-sm" href="/tabel/edit/{{ $tbl->id }}">Edit</a>
									<a class="btn btn-danger btn-sm" href="/tabel/hapus/{{ $tbl->id }}">Hapus</a>
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