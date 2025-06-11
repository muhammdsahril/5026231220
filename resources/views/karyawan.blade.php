@extends('template');

@section('content')
    <style type="text/css">
        
    </style>
    <section>
        <h2>Karyawan</h2>

        <br/>

        <table class="table table-striped">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lenkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ $k->namalengkap }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td>{{ $k->departemen }}</td>
                    <td>
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <br/>
        <a href="/karyawan/tambah" class="btn btn-success">Tambah</a>
        <br/>
		Halaman : {{ $karyawan->currentPage() }} <br/>
		Jumlah Data : {{ $karyawan->total() }} <br/>
		Data Per Halaman : {{ $karyawan->perPage() }} <br/>
        {{ $karyawan->links() }}
    </section>

@endsection