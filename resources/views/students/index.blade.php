<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
 
	<div class="container">
		<div class="card" >
			<div class="card-body">
				
 
				<h2 class="text-center"><a href="https://www.malasngoding.com">Golden English</a></h2>
 
				<h3>Data Pegawai</h3>
 
				<p>Cari Data Pegawai :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>

				<a  class="btn btn-primary" href="/pegawai/tambah" role="button">Tambah Pegawai Baru</a>
 
 				<br>

				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
						<th scope="col">Nama</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Umur</th>
						<th scope="col">Alamat</th>
						<th scope="col">Opsi</th>
					</tr>
					</thead>
					
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->nama }}</td>
						<td>{{ $p->jabatan }}</td>
						<td>{{ $p->umur }}</td>
						<td>{{ $p->alamat }}</td>
						<td>
							<a class="btn btn-info btn-sm" href="/pegawai/edit/{{ $p->id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
 
				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>
 
				{{ $pegawai->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>