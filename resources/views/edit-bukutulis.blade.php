@extends('template') 

@section('content')
<div class="container">
    {{-- Judul Halaman dan Tombol Kembali --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold">Edit Data Buku</h2>
        <a href="/bukutulis" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <form action="/bukutulis/update" method="POST">
        @csrf
        
        <input type="hidden" name="id" value="{{ $bukutulis->ID }}">

        {{-- Field Merk --}}
        <div class="form-group">
            <label for="merkbukutulis" class="font-weight-bold">Merk Buku</label>
            <input type="text" class="form-control" required name="merkbukutulis" value="{{ $bukutulis->merkbukutulis }}" placeholder="Contoh: Sinar Dunia (SiDU) 38 Lembar - 1 Pak">
        </div>

        {{-- Field Harga --}}
        <div class="form-group">
            <label for="hargabukutulis" class="font-weight-bold">Harga</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" required name="hargabukutulis" value="{{ $bukutulis->hargabukutulis }}" placeholder="Contoh: 32000">
            </div>
        </div>

        {{-- Field Ketersediaan --}}
        <div class="form-group">
            <label for="tersedia" class="font-weight-bold">Ketersediaan</label>
            <select class="form-control" name="tersedia" required>
                <option value="1" {{ $bukutulis->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                <option value="0" {{ $bukutulis->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
        </div>

        {{-- Field Berat --}}
        <div class="form-group">
            <label for="berat" class="font-weight-bold">Berat (dalam gram)</label>
            <div class="input-group">
                <input type="number" class="form-control" required name="berat" value="{{ $bukutulis->berat }}" placeholder="Contoh: 800">
                <div class="input-group-append">
                    <span class="input-group-text">gram</span>
                </div>
            </div>
        </div>
        
        {{-- Tombol Simpan --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection