<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illiminate\Pagination\Paginator;
use Illuminate\Support\Str;

class KaryawanController extends Controller {
    
    public function index() {
        $karyawan = DB::table('karyawan')->paginate(5);

        $karyawan->getCollection()->transform(function ($item) {
            $item->namalengkap = Str::upper($item->namalengkap);
            $item->departemen = Str::lower($item->departemen);

            return $item;
        });

        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah() {
        return view('tambah-karyawan');
    }

    public function hapus($id) {
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        return redirect('/karyawan');
    }

    public function store(Request $request) {
        $request->validate([
            'kodepegawai' => 'required|char|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|String|max:50',
            'divisi' => 'required|char|size:5',
            'departemen' => 'required|String|max:10',
        ]);

        Karyawan::tambah($request->all());

        return redirect('/karyawan');
    }
}