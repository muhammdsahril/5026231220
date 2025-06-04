@extends('template')

@section('content')
	<h2 class="font-weight-bold">Data Pegawai</h2>
 
	<a href="/pegawai" class="btn btn-info"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="mb-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="inputNama" name="nama" required placeholder="Masukkan Nama lengkap">
		</div>

		<div class="mb-3">
			<label for="jabatan" class="form-label">Jabatan</label>
			<input type="text" class="form-control" id="inputJabatan" name="jabatan" required placeholder="Masukkan Jabatan">
		</div>

		<div class="mb-3">
			<label for="umur" class="form-label">Umur</label>
			<input type="number" class="form-control" id="inputUmur" name="umur" required placeholder="Masukkan Umur">
		</div>

		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat</label>
			<textarea class="form-control" id="inputAlamat" name="alamat" required rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
		</div>

		<div>
			<button type="submit" class="btn btn-success">Simpan Data</button>
		</div>
	</form>
@endsection