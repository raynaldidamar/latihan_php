<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){

        // Mengambil data dari table pegawai
        $mahasiswa = DB::table('mahasiswa')->get();
        

        // Mengirim data mahasiswa ke view index
        return view('index', ['mahasiswa' => $mahasiswa]);
    }
    public function tambah(){
        return view('tambah');
    }
    public function store (Request $request){
        DB::table('mahasiswa')->insert([
            'nama_mahasiswa'=>$request->nama,
            'umur_mahasiswa' => $request->umur,
            'alamat_mahasiswa' => $request->alamat
        ]);

        return redirect('/mahasiswa');
    }
}
?>