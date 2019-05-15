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
			<th>Id Supplier</th>
			<th>Nama Supplier</th>
			<th>Alamat</th>
            <th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($supplier as $sup)
		<tr>
			<td>{{ $sup->idSupplier }}</td>
			<td>{{ $sup->nmSupplier }}</td>
			<td>{{ $sup->alamat }}</td>
			<td>
				<form action="{{route('supplier.destroy', $sup->idSupplier)}}" method="post">
				{{csrf_field()}}
				{{ method_field('DELETE') }}
			
				<a class="btn btn-sm btn-warning href=" href="{{route('supplier.edit', $sup->idSupplier)}}">Edit
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
