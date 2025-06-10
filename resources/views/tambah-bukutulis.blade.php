@extends('template')

@section('content')
<div class="container">
    {{-- Judul Halaman dan Tombol Kembali --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold">Tambah Data Buku</h2>
        <a href="/bukutulis" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Buku
        </a>
    </div>

    {{-- Form Tambah Data --}}
    <form action="/bukutulis/store" method="post">
        @csrf {{-- Menggunakan sintaks Blade modern --}}

        {{-- Field Merk --}}
        <div class="form-group">
            <label for="merkbukutulis" class="font-weight-bold">Merk</label>
            <input type="text" class="form-control @error('merkbukutulis') is-invalid @enderror" id="merkbukutulis" name="merkbukutulis" value="{{ old('merkbukutulis') }}" required placeholder="Masukkan Merk lengkap">
            @error('merkbukutulis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Field Harga --}}
        <div class="form-group">
            <label for="hargabukutulis" class="font-weight-bold">Harga</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control @error('hargabukutulis') is-invalid @enderror" id="hargabukutulis" name="hargabukutulis" value="{{ old('hargabukutulis') }}" required placeholder="Masukkan Harga">
                @error('hargabukutulis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Field Ketersediaan --}}
        <div class="form-group">
            <label for="tersedia" class="font-weight-bold">Ketersediaan</label>
            <select class="form-control @error('tersedia') is-invalid @enderror" id="tersedia" name="tersedia" required>
                <option value="">-- Pilih Status --</option>
                <option value="1" {{ old('tersedia') == '1' ? 'selected' : '' }}>Tersedia</option>
                <option value="0" {{ old('tersedia') == '0' ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
            @error('tersedia')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Field Berat --}}
        <div class="form-group">
            <label for="berat" class="font-weight-bold">Berat (dalam gram)</label>
            <div class="input-group">
                <input type="number" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" value="{{ old('berat') }}" required placeholder="Masukkan Berat dalam satuan gram">
                <div class="input-group-append">
                    <span class="input-group-text">gram</span>
                </div>
                @error('berat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Tombol Simpan --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-plus-circle"></i> Simpan Data Baru
            </button>
        </div>
    </form>
</div>
@endsection