<?php

namespace App\Http\Controllers;

use App\Models\Pengambilan;
use App\Models\Pengembalian;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PengembilanController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembilan = Pengembalian::with('pengambilan')->latest()->get(); //mengambil semua isi
        return view('customer.dashboardPengembalian', compact('pengembilan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $pengambilan = Pengambilan::all();
        $transaksi = Transaksi::all();
        return view('customer.dashboardPengembalianTambah', compact('transaksi','pengambilan'));
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
            'id_ambil' => 'required', 
            'id_bayar' => 'required',
            'id_customer' => 'required',
            'id_pemilik' => 'required',
            'tgl_Pengembalian' => 'required',
            'disewa_kamera' => 'required',
            
            
        ]);
        $alat = new Pengembalian;
        $alat->id_ambil = $request->get('id_ambil');
        $alat->id_bayar = $request->get('id_bayar');
        $alat->id_customer = $request->get('id_customer');
        $alat->id_pemilik = $request->get('id_pemilik');
        $alat->tgl_Pengembalian = $request->get('tgl_Pengembalian');
        $alat->disewa_kamera = $request->get('disewa_kamera');
      
        // dd($alat)->all;
        $alat->save();

        return redirect()->route('pengembalian.index')->with('success', 'Alat Kamera Berhasil Ditambahkan');
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
}
