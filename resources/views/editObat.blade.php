@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Edit</h4>
            
            <form class="contact-form php-mail-form" action="obat" method="POST">
            {{ csrf_field() }}

              <div class="form-group">
                <input type="hidden" name="id" value="{{ $obat>idObat }}" class="form-control">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nama" class="form-control" value="{{ $obat->nmObat }}">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="kategori" class="form-control" value="{{ $obat->kategori }}">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="jumlah" class="form-control" value="{{ $obat->jumlah }}">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="harga" class="form-control" value="{{ $obat->harga }}">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tanggal" class="form-control" value="{{ $obat->tglExp }}">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="stok" class="form-control" value="{{ $obat->stok }}">
                <div class="validate"></div>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
              </div>

            </form>
          </div>
          </section>
@endsection
