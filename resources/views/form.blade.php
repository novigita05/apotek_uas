@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Form Obat</h4>
            
            <form class="contact-form php-mail-form" action="obat" method="POST">
            {{ csrf_field() }}

              <div class="form-group">
                <input type="text" name="id" class="form-control" placeholder="ID Obat">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama Obat">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="kategori" class="form-control" placeholder="Kategori">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="harga" class="form-control" placeholder="Harga Satuan">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tanggal" class="form-control" placeholder="Expired">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="stok" class="form-control" id="stok" placeholder="Stok">
                <div class="validate"></div>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
              </div>

            </form>
          </div>
          </section>
@endsection
