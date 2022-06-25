<?php

namespace App\Http\Controllers;
use App\Models\Alat;
use App\Http\Controllers\Payment\TripayController;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function show() {

    }

    public function store(Request $request) {

    $alat = Alat::find($request->id);
    $method= $request->method;
    // dd($request->all());


    $tripay = new TripayController;
    $tripay->requestTransaksi($method, $alat);
    }
}
