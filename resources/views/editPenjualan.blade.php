@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Edit</h4>
            @foreach($penjualan as $jual)
            <form class="contact-form php-mail-form" action="{{ route('penjualan.update', $jual->idPenjualan) }}" method="POST">
            {{ csrf_field() }}
            {{method_field('PATCH')}}
            
              <div class="form-group">
                <input type="text" name="jumlah" class="form-control" value="{{ $jual->jumlah }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('penjualan.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
            @endforeach
          </div>
          </section>
@endsection
