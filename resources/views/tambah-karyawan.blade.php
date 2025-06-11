@extends('template')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold">Tambah Data Karyawan</h2>
        <a href="/karyawan" class="btn btn-secondary">
             Kembali ke Daftar
        </a>
    </div>

    <form action="/karyawan/store" method="post">
        @csrf

        <div class="row mb-3">
            <label for="kodepegawai" class="col-sm-3 col-form-label font-weight-bold">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('kodepegawai') is-invalid @enderror" id="kodepegawai" name="kodepegawai" value="{{ old('kodepegawai') }}" required placeholder="Contoh: KP001">
                @error('kodepegawai')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="namalengkap" class="col-sm-3 col-form-label font-weight-bold">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" value="{{ old('namalengkap') }}" required placeholder="Masukkan Nama Lengkap">
                @error('namalengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="divisi" class="col-sm-3 col-form-label font-weight-bold">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi" name="divisi" value="{{ old('divisi') }}" required placeholder="Contoh: ITDEV">
                @error('divisi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="departemen" class="col-sm-3 col-form-label font-weight-bold">Departemen</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('departemen') is-invalid @enderror" id="departemen" name="departemen" value="{{ old('departemen') }}" required placeholder="Masukkan Departemen">
                @error('departemen')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary">
                    Simpan Data Karyawan
                </button>
            </div>
        </div>

    </form>
</div>
@endsection