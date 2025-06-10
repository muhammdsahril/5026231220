<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illiminate\Pagination\Paginator;
 
 
class BukuTulisController extends Controller
{
    public function index() {
        $bukutulis = DB::table('bukutulis')->paginate(10);

        return view('bukutulis', ['bukutulis' => $bukutulis]);
    }

    public function edit($id) {
		// mengambil data pegawai berdasarkan id yang dipilih
		$bukutulis = DB::table('bukutulis')->where('ID',$id)->first();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit-bukutulis',['bukutulis' => $bukutulis]);
	}

    // update data
	public function update(Request $request)
	{
		// update data
		DB::table('bukutulis')->where('ID',$request->id)->update([
			'merkbukutulis' => $request->merkbukutulis,
			'hargabukutulis' => $request->hargabukutulis,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman
		return redirect('/bukutulis')->with('sukses', 'Data berhasil di update');
	}

    // method untuk hapus
	public function hapus($id)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('bukutulis')->where('ID',$id)->delete();
			
		// alihkan halaman ke halaman bukutulis
		return redirect('/bukutulis');
	}

    public function input() {
        return view('input-bukutulis', ['bukutulis' => $bukutulis]);
    }

    public function tambah() {
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
		// alihkan halaman
		return redirect('/bukutulis');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$bukutulis = DB::table('bukutulis')
		->where('merkbukutulis','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('bukutulis',['bukutulis' => $bukutulis]);
 
	}
}