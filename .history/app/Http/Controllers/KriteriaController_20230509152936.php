<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;

class kriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){

        $kriteria = kriteria::where('id', $id)->first();

        return view('editdatakriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $geografis      = $request->input('geografis');
        $penduduk       = $request->input('penduduk');
        $biaya   = $request->input('biaya');
        $sarana_dan_prasarana = $request->input('jenis');

        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->kode_kriteria     = $kode_kriteria;
        $kriteria->nama_kriteria     = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= Kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $kode_kriteria       = $request->input('kode_kriteria');
        $nama_kriteria       = $request->input('nama_kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $kriteria           = new Kriteria;
        $kriteria->kode_kriteria     = $kode_kriteria;
        $kriteria->nama_kriteria     = $nama_kriteria;
        $kriteria->bobot = $bobot; // Don't forget to encryp!s
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
