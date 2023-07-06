<?php

namespace App\Http\Controllers;

use App\Models\lokasii;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller {

    public function index() {

        $benang= ::count();
        $kriteria= Kriteria::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('benang','kriteria'))
        ;
    }
}
