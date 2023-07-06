<?php

namespace App\Http\Controllers;

use App\Models\lokasii;
use Illuminate\Http\Request;
use App\Models\User;

class lokasiiController extends Controller {

    public function index() {
        return view('datalokasii', [
            'users' => Benang::all(),
            'title' => 'Data lokasii'
        ]);
    }
    public function add() {
        return view('adddatalokasii',[
            'title' => 'Tambah Data lokasii'
        ]);
    }
    public function edit($id){

        $lokasii = lokasii::where('id', $id)->first();

        return view('editdatalokasii', [
            'benang' => $lokasii,
            'title' => 'Edit Data lokasii'
        ]);

    }

    public function update(Request $request, $id) {
        $lokasi_alternatif      = $request->input('lokasi_alternatif ');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $lokasii = Benang::where('id', $id)->first();
        $lokasii->lokasi_alternatif  = $nama_benang;
        $lokasii->warnabenang     = $warnabenang;
        $lokasii->ukuran = $ukuran;
        $lokasii->sifatbahan = $sifatbahan;

        $lokasii->save();

        return redirect()->to('/benang');
    }


    public function dashboard(){
        $benang= Benang::count();

        return view('main', compact('benang'));

    }

    public function store(Request $request) {
        $nama_benang      = $request->input('nama_benang');
        $warnabenang       = $request->input('warnabenang');
        $ukuran   = $request->input('ukuran');
        $sifatbahan = $request->input('sifatbahan');
        // TODO: Compare $password and $rePassword

        $benang           = new Benang;
        $benang->nama_benang    = $nama_benang;
        $benang->warnabenang     = $warnabenang;
        $benang->ukuran = $ukuran; // Don't forget to encryp!s
        $benang->sifatbahan = $sifatbahan;

        $benang->save();

        return redirect()->to('/benang');
    }
    public function delete($id) {
        $benang = Benang::where('id', $id)->first();
        $benang->delete();
        return redirect()->back();
    }
}
