@extends('layout.main')


@section('title', 'Form Tambah Data Penyerahan')



@section('container-fluid')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-8 ">
      <div class="card border-dark mb-0">
        <div class="card-header text-dark" align="center">Form Tambah Data Penyerahan</h3></div>
        <!-- /.card-header -->
        
        <div class="card border-2 shadow my-3">
          <div class="card-body card-bg-gradient-light text-dark">
            <form action="/penyerahan" method="post" class="">
              <div></div>
              {{ csrf_field() }}
              <div class="form-row justify-content-beetween my-3">
                <div class="form-group col-sm-4 mb-3 ml-5 mr-4 mb-sm-0">
                  <label class="">Tanggal</label>
                  <input type="text" class="form-control form-control-sm" id="datepicker" name="tgl_penyerahan" placeholder="dd/mm/yyyy" required="required" value="{{ old('tgl_penyerahan')}}">
                  @if($errors->has('tgl_penyerahan'))
                  <div class="text-danger">
                    {{ $errors->first('tgl_penyerahan')}}
                  </div>
                  @endif
                </div>

                <div class="form-group col-sm-5 mb-3 ml-5 mb-sm-0">
                  <label class="">Nama Murid</label>
                  <input type="text" class="form-control form-control-sm" id="" name="nama_murid" placeholder="Masukan Nama Murid....." required="required" value="{{ old('nama_murid')}}">
                  @if($errors->has('nama_murid'))
                  <div class="text-danger">
                    {{ $errors->first('nama_murid')}}
                  </div>
                  @endif
                </div>
              </div>

              <div class="form-row justify-content-beetween my-3">
                <div class="form-group col-sm-5 mb-3 ml-5 mb-sm-0">
                  <label class="">Modul</label>
                  {!! Form::select('modul_id', $modul, null, ['class' => 'form-control select form-control-sm', 'S' => 'Small','placeholder' => '-- Pilih Modul --', 'nama_modul' => 'modul_id', 'required']) !!}
                  <span class="help-block with-errors"></span>
                </div>
  
                <div class="form-group col-sm-5 mb-3 ml-3 mb-sm-0">
                  <label class="">Cabang</label>
                  {!! Form::select('cabang_id', $cabang, null, ['class' => 'form-control select form-control-sm','placeholder' => '-- Pilih Cabang --', 'nama_modul' => 'cabang_id', 'required']) !!}
                  <span class="help-block with-errors"></span>
                </div>
              </div>

              
              <div class="form-row justify-content-beetween my-3">
                <div class="form-group col-sm-5 mb-3 ml-5 mb-sm-0">
                  <label class="">Kelas</label>
                  <select id="kelas" name="kelas" class="form-control form-control-sm" value="{{ old('kelas')}}">
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

                <div class="form-group col-sm-5 mb-3 ml-3 mb-sm-0">
                  <label class="">Detail</label>
                  <select id="detail" name="detail" class="form-control form-control-sm" value="{{ old('detail')}}">
                    <option value="">-- Pilih Detail --</option>
                    <option value="Include Paket">Include Paket</option>
                    <option value="Hanya Modul">Hanya Modul</option>
                  </select>
                  @if($errors->has('detail'))
                  <div class="text-danger">
                    {{ $errors->first('detail')}}
                  </div>
                  @endif
                </div>
              </div>

              <div class="form-row justify-content-beetween  my-3">
                <div class="form-group col-sm-4 mb-3 ml-5 mr-5 mb-sm-0">
                  <label class="">Jumlah Modul</label>
                  <input type="text" class="form-control form-control-sm" id="" name="jml_modul" placeholder="0" required="required" value="{{ old('jml_modul')}}">
                  @if($errors->has('jml_modul'))
                  <div class="text-danger">
                    {{ $errors->first('jml_modul')}}
                  </div>
                  @endif
                </div>
              
                <div class="form-group col-sm-4 mb-3 ml-4 mb-sm-0">
                  <label class="">Jumlah Notebook</label>
                  <input type="text" class="form-control form-control-sm" id="" name="jml_notebook" placeholder="0" required="required" value="{{ old('jml_notebook')}}">
                  @if($errors->has('jml_notebook'))
                  <div class="text-danger">
                    {{ $errors->first('jml_notebook')}}
                  </div>
                  @endif
                </div>
              </div>

              <div class="form-row justify-content-beetween">
                <div class="form-group col-sm-5 mb-3 ml-5 mb-sm-0">
                  <label class="">Pembayaran</label>
                  <select id="pembayaran" name="pembayaran" class="form-control form-control-sm" value="{{ old('pembayaran')}}">
                    <option value="">-- Pilih Pembayaran --</option>
                    <option value="Regular">Cash</option>
                    <option value="">--------</option>
                    <option value="BRI">BRI</option>
                    <option value="Manadiri">Mandiri</option>
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                  </select>
                  @if($errors->has('pembayaran'))
                  <div class="text-danger">
                    {{ $errors->first('pembayaran')}}
                  </div>
                  @endif
                </div>
              
                <div class="form-group col-sm-5 mb-3 ml-3 mb-sm-0">
                  <label class="">PIC Penyerahan</label>
                  <input type="text" class="form-control form-control-sm" id="" name="pic_pembayaran" placeholder="Nama pic_penyerahan" required="required" value="{{ old('pic_pembayaran')}}">
                  @if($errors->has('pic_penyerahan'))
                  <div class="text-danger">
                    {{ $errors->first('pic_penyerahan')}}
                  </div>
                  @endif
                </div>
              </div>

              <div class="form-group row justify-content-beetween my-3">
                <div class="col-sm-5 mb-3 ml-5 mb-sm-0">
                  <label class="">Penyerahan Melalui</label>
                  <select id="kelas" name="kelas" class="form-control form-control-sm">
                    <option value="">-- Pilih Pemyerahan Melalui --</option>
                    <option value="Lembaga">Lembaga</option>
                    <option value="Go Send">Go Send</option>
                    <option value="JNE">JNE</option>
                    <option value="JNT">JNT</option>
                    <option value="POS">POS</option>
                  </select>
                  @if($errors->has('pengantar'))
                  <div class="text-danger">
                    {{ $errors->first('pengantar')}}
                  </div>
                  @endif
                </div>
              </div>

              <div class="row justify-content-beetween">
                <div class="col-4 mt-4 ml-5 mb-3">
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
