@extends('layout.main')


@section('title', 'Form Ubah Data Cabang')


@section('container-fluid')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="card-header" align="center">Form Ubah Data Modul</h3>
                </div>
                <!-- /.card-header -->
                <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body">
                    <form method="post" action="/cabang/update/{{ $cabang->id }}">
                      <div></div>
                      {{ csrf_field() }}
                      {{ method_field('PUT')}}
                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="id" name="id" placeholder="Masukan ID..." required="required" value="{{ $cabang->id }}">

                          @if($errors->has('id'))
                            <div class="text-danger">
                              {{ $errors->first('id')}}
                            </div>
                          @endif

                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="nama_cabang" name="nama_cabang" placeholder="Masukan Nama Modul..." required="required" value="{{$cabang->nama_cabang}}">

                          @if($errors->has('nama_cabang'))
                            <div class="text-danger">
                              {{ $errors->first('nama_cabang')}}
                            </div>
                          @endif

                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Nama Modul..." required="required" value="{{$cabang->alamat}}">

                          @if($errors->has('alamat'))
                            <div class="text-danger">
                              {{ $errors->first('alamat')}}
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
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>

@endsection
