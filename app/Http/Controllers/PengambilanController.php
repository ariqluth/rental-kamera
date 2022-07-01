<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Customer;
use App\Models\Transaksi;
use App\Models\Pemilik;
use App\Models\Pengambilan;
use PDF;


class PengambilanController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengambilan = Pengambilan::with('transaksi')->latest()->get(); //mengambil semua isi
        return view('customer.dashboardPengambilan', compact('pengambilan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = Pemilik::all();
        $transaksi = Transaksi::all();
        return view('customer.dashboardPengambilanTambah', compact('transaksi', 'pemilik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_bayar' => 'required', 
            'id_customer' => 'required',
            'id_pemilik' => 'required',
            'tgl_pengambilan' => 'required',
            
        ]);
        $alat = new Pengambilan;
        $alat->id_bayar = $request->get('id_bayar');
        $alat->id_customer = $request->get('id_customer');
        $alat->id_pemilik = $request->get('id_pemilik');
        $alat->tgl_pengambilan = $request->get('tgl_pengambilan');
      
        // dd($alat)->all;
        $alat->save();

        return redirect()->route('pengambilan.index')->with('success', 'Alat Kamera Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function cetak_pdf(){
        $pengambilan = Pengambilan::all();
        $pdf = PDF::loadView('customer.printTransaksi',['pengambilan'=>$pengambilan]);
        return $pdf->download();
    }
}
