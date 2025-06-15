@extends('template');

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold">Keranjang Belanja</h2>
        <a href="/keranjang/tambah" class="btn btn-primary">
            <i class="fas fa-plus"></i> Beli Barang Baru
        </a>
    </div>

    @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah</th>
                    <th>Harga per Item</th>
                    <th>Total Harga</th>
                    <th style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($keranjang as $item)
                    <tr>
                        <td class="text-center">{{ $item->ID }}</td>
                        <td class="text-center">{{ $item->kodebarang}}</td>
                        <td class="text-center">{{ $item->jumlah }}</td>
                        <td class="text-right">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="text-right">Rp {{ number_format($item->jumlah * $item->harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="/keranjang/hapus{{ $item->ID }}" class="btn btn-danger">Batal</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Keranjang belanja masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <br/>

    Halaman : {{ $keranjang->currentPage() }} <br/>
    Jumlah Data : {{ $keranjang->total() }} <br/>
    Data Per Halaman : {{ $keranjang->perPage() }} <br/>
    {{ $keranjang->links() }}
</div>
@endsection