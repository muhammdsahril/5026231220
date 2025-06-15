@extends('template')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold">Tambah Keranjang</h2>
        <a href="/keranjang" class="btn btn-secondary">
             Kembali
        </a>
    </div>

    <form action="/keranjang/store" method="post">
        @csrf

        <div class="row mb-3">
            <label for="kodebarang" class="col-sm-3 col-form-label font-weight-bold">Kode Barang</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('kodebarang') is-invalid @enderror" id="kodebarang" name="kodebarang" value="{{ old('kodebarang') }}" required placeholder="Contoh: 100">
                @error('kodebarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="jumlah" class="col-sm-3 col-form-label font-weight-bold">Jumlah</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required placeholder="Masukkan Jumlah Pembelian">
                @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="harga" class="col-sm-3 col-form-label font-weight-bold">Harga</label>
            <div class="col-sm-9">
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" required placeholder="Contoh: 100000">
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary">
                    Simpan Keranjang
                </button>
            </div>
        </div>

    </form>
</div>
@endsection