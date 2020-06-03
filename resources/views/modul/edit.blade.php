@extends('layout.main')


@section('title', 'Form Data MOdul')


@section('container-fluid')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="card-header" align="center">Form Data Modul</h3>
                </div>
                <!-- /.card-header -->
                <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body">
                    <form method="post" action="/modul/update/{{ $modul->id }}">
                      <div></div>
                      {{ csrf_field() }}
                      {{ method_field('PUT')}}
                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="id" name="id" placeholder="Masukan ID..." required="required" value="{{ $modul->id }}">

                          @if($errors->has('id'))
                            <div class="text-danger">
                              {{ $errors->first('id')}}
                            </div>
                          @endif

                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="nama_modul" name="nama_modul" placeholder="Masukan Nama Modul..." required="required" value="{{$modul->nama_modul}}">

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
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>

@endsection
