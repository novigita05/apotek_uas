@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Form Pemesanan</h4>
            
            <form class="contact-form php-mail-form" role="form" action="{{ route('pemesanan.store') }}" method="POST">
            {{ csrf_field() }}

              <div class="form-group">
                <input type="name" name="pemesanan_idPesan" class="form-control" placeholder="ID Pesan" autocomplete="off" required >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nmObat" class="form-control" placeholder="Nama Obat" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tglPesan" class="form-control" placeholder="Tanggal Pesan" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <select class="form-control" name="status" autocomplete="off" required>
                    <option value="">-- Pilih --</option>
                    <option value="Ready">Ready</option>
                    <option value="Not-Ready">Not-Ready</option>
                </select>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('pemesanan.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
          </div>
          </section>
@endsection
