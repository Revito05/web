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
        $sarana_dan_prasarana = $request->input('sarana_dan_prasarana');

        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->geografis     = $geografis;
        $kriteria->penduduk     = $penduduk;
        $kriteria->biaya = $biaya;
        $kriteria->sarana_dan_prasarana = $sarana_dan_prasarana;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= Kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $geografis       = $request->input('kode_kriteria');
        $penduduk       = $request->input('nama_kriteria');
        $biaya   = $request->input('bobot');
        $sarana_dan_prasarana = $request->input('jenis');
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
