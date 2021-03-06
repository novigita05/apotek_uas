@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Obat Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			       <th>Id Pembelian</th>
             <th>Id Obat</th>
						 <th>Id Supplier</th>
			       <th>Nama Obat</th>
						 <th>Tanggal Kirim</th>
             <th>Jumlah</th>
             <th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($pembelian as $beli)
		<tr>
			    	<td>{{ $beli->idPembelian }}</td>
            <td>{{ $beli->obat_idObat }}</td>
						<td>{{ $beli->supplier_idSupplier }}</td>
			    	<td>{{ $beli->nmObat }}</td>
						<td>{{ $beli->tglKirim }}</td>
            <td>{{ $beli->jumlah }}</td>
			    	<td>
							<form action="{{route('pembelian.destroy', $beli->idPembelian)}}" method="post">
							{{csrf_field()}}
							{{ method_field('DELETE') }}
			
							<a class="btn btn-sm btn-warning href=" href="{{route('pembelian.edit', $beli->idPembelian)}}">Edit
							</a>
							<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
							</form>
						</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	</div>
    </div>
	</div>
    </section>
</section>
@endsection
