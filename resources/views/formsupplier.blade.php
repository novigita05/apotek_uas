@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Form Supplier</h4>
            
            <form class="contact-form php-mail-form" action="{{ route('supplier.store') }}" method="POST">
            {{ csrf_field() }}
            
              <div class="form-group">
                <input type="text" name="idSupplier" class="form-control" placeholder="ID Supplier" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nmSupplier" class="form-control" placeholder="Nama Supplier" autocomplete="off" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" autocomplete="off" required>
                <div class="validate"></div>
              </div>


              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Submit</button>
                <a href="{{ route('supplier.index') }}" class="btn btn-large btn-primary">Batal</a>
              </div>

            </form>
          </div>
          </section>
@endsection
