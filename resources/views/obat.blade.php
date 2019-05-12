@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			<th>Id Obat</th>
			<th>Nama Obat</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
            	<th>Tanggal Expired</th>
            	<th>Stok</th>
			<th>Satuan</th>
            	<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($obat as $ob)
		<tr>
			<td>{{ $ob->idObat }}</td>
			<td>{{ $ob->nmObat }}</td>
			<td>{{ $ob->hargaBeli }}</td>
			<td>{{ $ob->hargaJual }}</td>
            	<td>{{ $ob->tglExp }}</td>
            	<td>{{ $ob->stok }}</td>
			<td>{{ $ob->satuan }}</td>
			<td>
				<form action="{{route('obat.destroy', $ob->idObat)}}" method="post">
				{{csrf_field()}}
				{{ method_field('DELETE') }}
			
				<a class="btn btn-sm btn-warning href=" href="{{route('obat.edit', $ob->idObat)}}">Edit
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
