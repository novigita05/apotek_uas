@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Form Obat</h4>
            
            <form class="contact-form php-mail-form" action="{{ route('obat.store') }}" method="POST">
            {{ csrf_field() }}
            
              <div class="form-group">
                <input type="text" name="idObat" class="form-control" placeholder="ID Obat" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nmObat" class="form-control" placeholder="Nama Obat" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="hargaBeli" class="form-control" placeholder="Harga Beli" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="hargaJual" class="form-control" placeholder="Harga Jual" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tglExp" class="form-control" placeholder="Expired" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="stok" class="form-control" placeholder="Stok" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <select class="form-control" name="satuan" autocomplete="off" required>
                    <option value="">-- Pilih --</option>
                    <option value="Botol">Botol</option>
                    <option value="Box">Box</option>
                    <option value="Kotak">Kotak</option>
                    <option value="Strip">Strip</option>
                </select>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('obat.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
          </div>
          </section>
@endsection
