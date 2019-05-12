@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <html>
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

<div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
          

          <div class="small-box bg-yellow">
             <h1> <p><b>Data Obat</b></p> </h1>
            </div>
            
          <img src="img/tambah.jpg" class="img-circle" height="180" width="180"></a></p>
            <a class="btn btn-sm btn-danger" href="{{url('/obat/create')}}" class="small-box-footer">Tambah Data</a>

            <div class="small-box bg-yellow">
            <h1> <p><b>Data Obat Keluar</b></p> </h1>
            </div>
            
            <th><img src="img/tambah.jpg" class="img-circle" height="180" width="180"></a></p>
            <a class="btn btn-sm btn-danger" href="{{url('/penjualan/create')}}" class="small-box-footer">Tambah Data</a>

            <div class="small-box bg-yellow">
            <h1> <p><b>Data Obat Masuk</b></p> </h1>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <img src="img/tambah.jpg" class="img-circle" height="180" width="180"></a></p>
            <a class="btn btn-sm btn-danger" href="{{url('/pembelian/create')}}" class="small-box-footer">Tambah Data</a>

            <div class="small-box bg-yellow">
            <h1> <p><b>Data Supplier</b></p> </h1>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <img src="img/tambah.jpg" class="img-circle" height="180" width="180"></a></p>
            <a class="btn btn-sm btn-danger" href="{{url('/supplier/create')}}" class="small-box-footer">Tambah Data</a>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
</div>
</section>
</section>
@endsection
