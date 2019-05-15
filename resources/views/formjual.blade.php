@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Form Obat Keluar</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" action="{{ route('penjualan.store') }}" method="POST">
            {{ csrf_field() }}

              <div class="form-group">
                <input type="text" name="idPenjualan" class="form-control" placeholder="ID Penjualan" autocomplete="off" required>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <select type="text" name="obat_idObat1" class="form-control" placeholder="ID Obat" autocomplete="off" required>
                <option value="">Pilih ID</option>
                @foreach($obat as $ob)
                <option value="{{$ob->idObat}}">{{$ob->idObat}}</option>
                @endforeach
                </select>
              </div>
              
              <div class="form-group">
                <select type="text" name="nmObat" class="form-control" autocomplete="off" required>
                <option value="">Pilih Nama Obat</option>
                @foreach($obat as $ob)
                <option value="{{$ob->nmObat}}">{{$ob->nmObat}}</option>
                @endforeach
                </select>
              </div>

              <div class="form-group">
                <input type="date" name="tglKeluar" class="form-control" placeholder="Tanggal Keluar" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              
              <div class="form-group">
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" autocomplete="off" required>
                <div class="validate"></div>
              </div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('penjualan.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
          </div>
          </section>
@endsection
