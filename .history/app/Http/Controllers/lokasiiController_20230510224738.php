<?php

namespace App\Http\Controllers;

use App\Models\lokasii;
use Illuminate\Http\Request;
use App\Models\User;

class lokasiiController extends Controller {

    public function index() {
        return view('datalokasii', [
            'users' => lokasii::all(),
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
            'lokasii' => $lokasii,
            'title' => 'Edit Data lokasii'
        ]);

    }

    public function update(Request $request, $id) {
        $lokasialternatif      = $request->input('lokasialternatif ');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $lokasii = lokasii::where('id', $id)->first();
        $lokasii->lokasialternatif  = $lokasialternatif ;
        $lokasii->kriteria     = $kriteria;
        $lokasii->bobot = $bobot;
        $lokasii->jenis = $jenis;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }


    public function dashboard(){
        $lokasii= lokasii::count();

        return view('main', compact('lokasii'));

    }

    public function store(Request $request) {
        $lokasialternatif       = $request->input('lokasialternatif ');
        $kriteria       = $request->input('kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $lokasii           = new lokasii;
        $lokasii->lokasi_alternatif     = $lokasialternatif ;
        $lokasii->kriteria     = $kriteria;
        $lokasii->bobot = $bobot; // Don't forget to encryp!s
        $lokasii->jenis = $jenis;

        $lokasii->save();

        return redirect()->to('/lokasii');
    }
    public function delete($id) {
        $lokasii = lokasii::where('id', $id)->first();
        $lokasii->delete();
        return redirect()->back();
    }
}
