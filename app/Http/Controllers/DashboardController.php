<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use App\Models\kriteria;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $mobil= mobil::count();
        $kriteria= kriteria::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('mobil','kriteria'))
        ;
    }
}
