<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\LogActivity;

class BukuTulisController extends Controller
{
    public function index() {

        $namaroute = '/' . request()->path();

        LogActivity::create(['namaroute' => $namaroute]);

        $bukutulis = DB::table('bukutulis')->paginate(10);
        return view('bukutulis', ['bukutulis' => $bukutulis]);
    }

    public function edit($id) {
        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);

        $bukutulis = DB::table('bukutulis')->where('ID',$id)->first();
        return view('edit-bukutulis',['bukutulis' => $bukutulis]);
    }

    public function update(Request $request)
    {
        DB::table('bukutulis')->where('ID',$request->id)->update([
            'merkbukutulis' => $request->merkbukutulis,
            'hargabukutulis' => $request->hargabukutulis,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);

        return redirect('/bukutulis')->with('sukses', 'Data berhasil di update');
    }

    public function hapus($id)
    {
        DB::table('bukutulis')->where('ID',$id)->delete();
            
        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);
        return redirect('/bukutulis');
    }

    public function input() {
        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);
        return view('input-bukutulis');
    }

    public function tambah() {
        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);
        return view('tambah-bukutulis');
    }

    public function store(Request $request) {
        // insert data ke table
        DB::table('bukutulis')->insert([
            'merkbukutulis' => $request->merkbukutulis,
            'hargabukutulis' => $request->hargabukutulis,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        $namaroute = '/' . request()->path();
        LogActivity::create(['namaroute' => $namaroute]);

        return redirect('/bukutulis');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
        // mengambil data dari table buku tulis sesuai pencarian data
        $bukutulis = DB::table('bukutulis')
        ->where('merkbukutulis','like',"%".$cari."%")
        ->paginate();
 
        // mengirim data buku tulis ke view index
        return view('bukutulis',['bukutulis' => $bukutulis]);
    }
}
