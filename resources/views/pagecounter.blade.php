@extends('template')

@section('content')

    <h2 class="font-weight-bold">Page Counter</h2>
	<div class="container-fluid" style="display:flex;height:60px;align-items:center;background-color:rgb(214, 255, 214);color:darkgreen">
        Anda Pengunjung ke: {{ $pagecounter->Jumlah }}
    </div>
@endsection