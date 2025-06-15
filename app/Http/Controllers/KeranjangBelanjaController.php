<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illiminate\Pagination\Paginator;
use Illuminate\Support\Str;

class KeranjangBelanjaController extends Controller {
    public function index() {
        $keranjang = DB::table('keranjangbelanja')->paginate(5);

        return view('keranjang', ['keranjang' => $keranjang]);
    }

    public function tambah() {
        return view('tambah-keranjang');
    }

    public function hapus($id) {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }

    public function store(Request $request) {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect('/keranjang');
    }
}