@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Obat Keluar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			    			<th>Id Penjualan</th>
                <th>Id Obat</th>
			    			<th>Nama Obat</th>
            		<th>Jumlah</th>
            		<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($penjualan as $jual)
		<tr>
			    <td>{{ $jual->idPenjualan }}</td>
          <td>{{ $jual->obat_idObat1 }}</td>
			    <td>{{ $jual->nmObat }}</td>
          <td>{{ $jual->jumlah }}</td>
			    <td>
				<form action="{{route('penjualan.destroy', $jual->idPenjualan)}}" method="post">
				{{csrf_field()}}
				{{ method_field('DELETE') }}
			
				<a class="btn btn-sm btn-warning href=" href="{{route('penjualan.edit', $jual->idPenjualan)}}">Edit
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
