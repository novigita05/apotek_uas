@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">

	<div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <h4><i class="fa fa-angle-right"></i> Tabel Obat</h4>
                <hr>
            <thead>
            <tr>
			<th>Id Obat</th>
			<th>Nama Obat</th>
			<th>Kategori</th>
			<th>Jumlah</th>
			<th>Harga</th>
            	<th>Tanggal Expired</th>
            	<th>Stok</th>
            	<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($obat as $obat)
		<tr>
			<td>{{ $obat->idObat }}</td>
			<td>{{ $obat->nmObat }}</td>
			<td>{{ $obat->kategori }}</td>
			<td>{{ $obat->jumlah }}</td>
                  <td>{{ $obat->harga }}</td>
            	<td>{{ $obat->tglExp }}</td>
            	<td>{{ $obat->stok }}</td>
			<td>
				<a href="editObat/{{ $obat->idObat }}">Edit</a>
				|
				<a href="obat/{{ $obat->idObat }}">Hapus</a>
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
