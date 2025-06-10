@extends('template')

@section('content')
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
	<section>
		<h2 class="font-weight-bold">Buku Tulis</h2>
		<br/>
	 
		<a href="/bukutulis/tambah" class="btn btn-success">+ Tambah Buku Tulis Baru</a>
		
		<br/>
		<p class="mb-2 font-weight-bold">Cari Data Buku Tulis :</p>

		<form action="/bukutulis/cari" method="GET" class="mb-4">
			<div class="input-group">
				<input type="text" class="form-control" name="cari" placeholder="Ketik merk, harga, dll..." value="{{ old('cari', request()->get('cari')) }}">
				<button class="btn btn-success" type="submit" id="button-addon2">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
					</svg>
					<span class="ms-1">CARI</span>
				</button>
			</div>
		</form>
		<br/>
	 
		<table class="table table-striped">
			<tr>
				<th>Merk</th>
				<th>Harga</th>
				<th>Tersedia</th>
				<th>Berat</th>
				<th>Opsi</th>
			</tr>
			@foreach($bukutulis as $b)
			<tr>
				<td>{{ $b->merkbukutulis }}</td>
				<td>{{ $b->hargabukutulis }}</td>
				<td>{{ $b->tersedia }}</td>
				<td>{{ $b->berat }}</td>
				<td>
					<a href="/bukutulis/edit/{{ $b->ID}}" class="btn btn-success">Edit</a>
					|
					<a href="/bukutulis/hapus/{{ $b->ID }}" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			@endforeach
		</table>
		<br/>
		Halaman : {{ $bukutulis->currentPage() }} <br/>
		Jumlah Data : {{ $bukutulis->total() }} <br/>
		Data Per Halaman : {{ $bukutulis->perPage() }} <br/>
	
	
		{{ $bukutulis->links() }}
	</section>
@endsection