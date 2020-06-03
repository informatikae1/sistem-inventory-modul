@extends('layout.main')


@section('title', 'Form Tambah Data Peminjaman')



@section('container-fluid')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-6 ">
      <div class="card border-dark mb-0">
        <div class="card-header text-dark" align="center">Form Tambah Data Peminjaman</h3></div>
        <!-- /.card-header -->
        
        <div class="card border-2 shadow my-3">
          <div class="card-body card-bg-gradient-light text-dark">
            <form action="/peminjaman" method="post" class="">
              <div></div>
              {{ csrf_field() }}
              <div class="form-group row justify-content-beetween">
                <div class="col-sm-3 mb-3 ml-5 mb-sm-0">
                  <label class="">Tanggal</label>
                  <input type="text" class="form-control form-control-sm" id="datepicker" name="tgl_pinjam" placeholder="dd/mm/yyyy" required="required" >

                  @if($errors->has('tgl_pinjam'))
                  <div class="text-danger">
                    {{ $errors->first('tgl_pinjam')}}
                  </div>
                  @endif

                </div>
              </div>

              <div class="form-group row justify-content-beetween">
                <div class="col-sm-10 mb-3 ml-5 mb-sm-0">
                  <label class="">Cabang</label>
                  {!! Form::select('cabang_id', $cabang, null, ['class' => 'form-control select form-control-sm','placeholder' => '-- Pilih Cabang --', 'nama_modul' => 'cabanag_id', 'required']) !!}
                  <span class="help-block with-errors"></span>
                </div>
              </div>

              <div class="form-group row justify-content-beetween">
                <div class="col-sm-10 mb-3 ml-5 mb-sm-0">
                  <label class="">Modul</label>
                  {!! Form::select('modul_id', $modul, null, ['class' => 'form-control select form-control-sm', 'S' => 'Small','placeholder' => '-- Pilih Modul --', 'nama_modul' => 'modul_id', 'required']) !!}
                  <span class="help-block with-errors"></span>
                </div>
              </div>

              <div class="form-group row justify-content-beetween">
                <div class="col-sm-10 mb-3 ml-5 mb-sm-0">
                  <label class="">Kelas</label>
                  <select id="kelas" name="kelas" class="form-control form-control-sm">
                    <option value="">-- Pilih Kelas --</option>
                    <option value="Regular">Regular</option>
                    <option value="Private">Private</option>
                  </select>

                  @if($errors->has('kelas'))
                  <div class="text-danger">
                    {{ $errors->first('kelas')}}
                  </div>
                  @endif

                </div>
              </div>

              <div class="form-group row justify-content-beetween">
                <div class="col-sm-2 mb-3 ml-5 mb-sm-0">
                  <label class="">Jumlah</label>
                  <input type="text" class="form-control form-control-sm" id="" name="jml_modul" placeholder="0" required="required" value="">

                  @if($errors->has('jml_modul'))
                  <div class="text-danger">
                    {{ $errors->first('jml_modul')}}
                  </div>
                  @endif

                </div>
              </div>

              <div class="form-group row justify-content-beetween">
                <div class="col-sm-6 mb-3 ml-5 mb-sm-5">
                  <label class="">Nama Pengajar</label>
                  <input type="text" class="form-control form-control-sm" id="" name="nama_pengajar" placeholder="Nama Pengajar..." required="required" value="">

                  @if($errors->has('nama_pengajar'))
                  <div class="text-danger">
                    {{ $errors->first('nama_pengajar')}}
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
