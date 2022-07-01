<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengambilan;
use App\Models\Pengembalian;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $pengambilan = Pengambilan::All();
        $pengembalian = Pengembalian::All();
        return view('Pemilik.pengelolaPelanggan',compact(['pengambilan','pengembalian']));
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

    public function index()
    {
        return view('Pemilik.alat');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pemilik.alatTambah');
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
       'pemilik' => 'required',
       'nama_Kamera' => 'required', 
       'kategori' => 'required',
       'speksifikasi' => 'required',
       'gambar' => 'image|file|max:1024',
       'harga' => 'required',
       'stok' => 'required',

    ]);
    $alat = new Alat;
    $alat->id_pemilik = $request->get('pemilik');
    $alat->kategori = $request->get('kategori');
    $alat->nama_alat = $request->get('nama_kamera');
    $alat->speksifikasi = $request->get('speksifikasi');
    $alat->gambar = $image_name;
    $alat->harga = $request->get('harga');
    $alat->stok = $request->get('stok');
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
    
   
    return view('Pemilik.detailAlat');
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
        // $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('Pemilik.edit');
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
       // return $request;
       if ($request->file('image')) {
        $image_name = $request->file('image')->store('images', 'public');
    }

 //melakukan validasi data
   
    $request->validate([
       'pemilik' => 'required',
       'nama_Kamera' => 'required', 
       'kategori' => 'required',
       'speksifikasi' => 'required',
       'gambar' => 'image|file|max:1024',
       'harga' => 'required',
       'stok' => 'required',

    ]);
    $alat = new Alat;
    $alat->id_pemilik = $request->get('pemilik');
    $alat->kategori = $request->get('kategori');
    $alat->nama_alat = $request->get('nama_kamera');
    $alat->speksifikasi = $request->get('speksifikasi');
    $alat->gambar = $image_name;
    $alat->harga = $request->get('harga');
    $alat->stok = $request->get('stok');
    $alat->save();

    return redirect()->route('Pemilik.alat')
    ->with('success', 'Alat Kamera Berhasil Ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mahasiswa = Mahasiswa::findOrFail($nim);

        // if( Storage::delete('public/' . $mahasiswa->featured_image)) {
        //   $mahasiswa->delete();  
    // }

    return redirect()->route('alat.index')->with('success', 'alat berhasil dihapus');

    }
}
