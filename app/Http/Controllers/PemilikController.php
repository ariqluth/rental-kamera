<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function alatdisewa()
    {
        return view('Pemilik.alat');
    }

    public function alatdisewaTambah()
    {
        return view('Pemilik.alatTambah');
    }

    public function alatdisewaEdit()
    {
        return view('Pemilik.alatEdit');
    }

    public function alatdisewaDetail()
    {
        return view('Pemilik.detailAlat');
    }

    public function dataPelanggan()
    {
        return view('Pemilik.pengelolaPelanggan');
    }

    public function datalaporan()
    {
        return view('Pemilik.pengelolaLaporan');
    }

    public function kondisikamera(){
        return view('Pemilik.kondisiKamera');
    }


    public function profilePemilik()
    {
        return view('Pemilik.profil');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alat_store(Request $request)
    {
    
        // return $request;
       if ($request->file('image')) {
        $image_name = $request->file('image')->store('images', 'public');
    }

 //melakukan validasi data
   
    $request->validate([
       'Pemilik' => 'required',
       'Nama_Kamera' => 'required', 
       'Kategori' => 'required',
       'Speksifikasi' => 'required',
       'Gambar' => 'image|file|max:1024',
       'Harga' => 'required',
       'Stok' => 'required',

    ]);
    $alat = new Alat;
    $alat->id_pemilik = $request->get('Pemilik');
    $alat->kategori = $request->get('Kategori');
    $alat->nama_alat = $request->get('Nama_Kamera');
    $alat->speksifikasi = $request->get('Speksifikasi');
    $alat->gambar = $image_name;
    $alat->harga = $request->get('Harga');
    $alat->stok = $request->get('Stok');
    $alat->save();

    return redirect()->route('Pemilik.alat')
    ->with('success', 'Alat Kamera Berhasil Ditambahkan');
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
