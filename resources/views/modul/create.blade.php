@extends('layout.main')


@section('title', 'Data Modul')


@section('container-fluid')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-4 ">
      <div class="card border-dark mb-0">
        <div class="card-header text-dark" align="center">Form Data Modul</h3></div>
        <!-- /.card-header -->
        <div class="card o-hidden border-0 shadow-lg my-3">
          <div class="card-body card-bg-gradient-light text-dark">
            <form action="/modul" method="post" class="">
              <div></div>
              {{ csrf_field() }}
              <div class="form-group row justify-content-between">
                <div class="col-sm-6 mb-3 ml-4 mb-sm-0">
                  <label class="">ID Modul</label>
                  <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="Masukan ID..." required="required" value="{{ old('id')}}">

                  @if($errors->has('id'))
                  <div class="text-danger">
                    {{ $errors->first('id')}}
                  </div>
                  @endif

                </div>
              </div>

              <div class="form-group row justify-content-between">
                <div class="col-sm-10 mb-3 ml-4 mb-sm-0">
                  <label class="">Nama Modul</label>
                  <input type="text" class="form-control form-control-sm" id="nama_modul" name="nama_modul" placeholder="Masukan Nama Modul..." required="required" value="{{ old('nama_modul')}}">

                  @if($errors->has('nama_modul'))
                  <div class="text-danger">
                    {{ $errors->first('nama_modul')}}
                  </div>
                  @endif

                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-3">
                  <input class="btn btn-primary btn-sm" type="submit" value="Simpan">
                </div>
              </div>

            </form> 
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

@endsection
