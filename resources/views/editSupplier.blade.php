@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Edit</h4>
            @foreach($supplier as $sup)
            <form class="contact-form php-mail-form" action="{{ route('obat.update', $sup->idSupplier) }}" method="POST">
            {{ csrf_field() }}
            {{method_field('PATCH')}}
              <div class="form-group">
                <input type="text" name="nmSupplier" class="form-control" value="{{ $sup->nmSupplier }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="alamat" class="form-control" value="{{ $sup->alamat }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="tglKirim" class="form-control" value="{{ $sup->tglKirim }}" autocomplete="off" required>
                <div class="validate"></div>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('supplier.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
            @endforeach
          </div>
          </section>
@endsection
