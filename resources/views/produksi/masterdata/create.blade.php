@extends('layout2.main')


@section('title', 'masterdata')


@section('container-fluid')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="card-header" align ="center">Form Produksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body">
                    <form action="/masterdata" method="post" class="user">
                      <div></div>
                      {{ csrf_field() }}

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="date" class="form-control form-control-sm" id="tgl_produksi" name="tgl_produksi" placeholder="Masukan Tanggal Produksi..." required="required">

                          @if($errors->has('tgl_prodksi'))
                            <div class="text-danger">
                              {{ $errors->first('tgl_produksi')}}
                            </div>
                          @endif
                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0"> 
                        {!! Form::select('modul_id', $modul, null, ['class' => 'form-control select 
                        form-control-sm', 'S' => 'Small', 'placeholder' => '-- Pilih Modul --', 'nama_modul' =>
                        'modul_id', 'required']) !!}
                        <span class="help-block with-errors"></span>
                       </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-sm" id="stok_masuk_id" name="stok_masuk_id" placeholder="Masukan Stok Modul..." required="required">

                          @if($errors->has('stok_masuk_id'))
                            <div class="text-danger">
                              {{ $errors->first('stok_masuk_id')}}
                            </div>
                          @endif

                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-sm" id="jml_notebook" name="jml_notebook" placeholder="Masukan Jumlah Notebook..." required="required">

                          @if($errors->has('jml_notebook'))
                            <div class="text-danger">
                              {{ $errors->first('jml_notebook')}}
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
