@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Edit</h4>
            @foreach($obat as $ob)
            <form class="contact-form php-mail-form" action="{{ route('obat.update', $ob->idObat) }}" method="POST">
            {{ csrf_field() }}
            {{method_field('PATCH')}}
              <div class="form-group">
                <input type="text" name="nmObat" class="form-control" value="{{ $ob->nmObat }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="hargaBeli" class="form-control" value="{{ $ob->hargaBeli }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="hargaJual" class="form-control" value="{{ $ob->hargaJual }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tglExp" class="form-control" value="{{ $ob->tglExp }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="stok" class="form-control" value="{{ $ob->stok }}" autocomplete="off" required>
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
            @endforeach
          </div>
          </section>
@endsection
