@extends('layout.main')


@section('title', 'Master Data')


@section('container-fluid')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="card-header" align="center">Edit Data Produksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card o-hidden border-0 shadow-lg my-3">
                <div class="card-body">
                    <form method="post" action="/masterdata/update/{{ $produksi->id }}">
                      <div></div>
                      {{ csrf_field() }}

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="Masukan Kode Produksi..." value= " value="{{ $produksi->id }}">

                          @if($errors->has('id')) 
                            <div class="text-denger">
                              {{ $errors->first('id')}}
                            </div>
                              @endif
                        </div>
                        </div>
                
                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="date" class="form-control form-control-sm" id="tgl_produksi" name="tgl_produksi" placeholder="Masukan Tanggal Produksi..." value="{{ $produksi->tgl_produksi }}">
                         
                          @if($errors->has('tgl_produksi'))
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
                          <input type="text" class="form-control form-control-sm" id="stok_masuk_id" name="stok_masuk_id" placeholder="Masukan Stok Masuk..." value="{{ $produksi->stok_masuk_id }}">
                         
                          @if($errors->has('stok_masuk_id'))
                            <div class="text-danger">
                              {{ $errors->first('stok_masuk_id')}}
                            </div>
                          @endif

                        </div>
                      </div>

                      <div class="form-group row justify-content-center">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-sm" id="jml_notebook" name="jml_notebook" placeholder="Masukan Jumlah Notebook..." value="{{ $produksi->jml_notebook }}">
                         
                          @if($errors->has('jml_notebook'))
                            <div class="text-danger">
                              {{ $errors->first('jml_notebook')}}
                            </div>
                          @endif

                        
                       </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-3">
                        <input class="btn btn-primary btn-sm" type="submit" value="Ubah">
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