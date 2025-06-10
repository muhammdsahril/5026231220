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
		<h2 class="font-weight-bold">Data Pegawai</h2>
		<br/>
	 
		<a href="/pegawai/tambah" class="btn btn-success">+ Tambah Pegawai Baru</a>
		
		<br/>
		<p class="mb-2 font-weight-bold">Cari Data Pegawai :</p>

		<form action="/pegawai/cari" method="GET" class="mb-4">
			<div class="input-group">
				<input type="text" class="form-control" name="cari" placeholder="Ketik nama, jabatan, dll..." value="{{ old('cari', request()->get('cari')) }}">
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
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td>
					<div class="d-flex">
						<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success mr-2">Edit</a>

						<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
					</div>
				</td>
			</tr>
			@endforeach
		</table>
		<br/>
		Halaman : {{ $pegawai->currentPage() }} <br/>
		Jumlah Data : {{ $pegawai->total() }} <br/>
		Data Per Halaman : {{ $pegawai->perPage() }} <br/>
	
	
		{{ $pegawai->links() }}
	</section>
@endsection