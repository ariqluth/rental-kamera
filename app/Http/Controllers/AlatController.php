<?php

namespace App\Http\Controllers;
use App\Models\Alat;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    //
    // crud

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request('search')){
            $alat = Alat::where('nama_alat', 'like', '%'.request('search').'%')
                                    ->orwhere('kategori', 'like', '%'.request('search').'%')
                                    ->orwhere('stok', 'like', '%'.request('search').'%')
                                    ->paginate(5);
            return view('Pemilik.alat', ['paginate'=>$alat]);
        } else {
            //fungsi eloquent menampilkan data menggunakan pagination
            $alat = Alat::with('pemilik')->latest()->get(); //mengambil semua isi tabel
            $alat= Alat::orderBy('id','asc')->paginate(3);
            return view('Pemilik.alat',['alat' => $alat ,'paginate'=>$alat]);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pemilik = Pemilik::all();
        return view('Pemilik.alatTambah', ['pemilik' => $pemilik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // return $request;
       if ($request->file('image')) {
        $image_name = $request->file('image')->store('images', 'public');
    }

 //melakukan validasi data
   
    $request->validate([
       'nama_alat' => 'required', 
       'kategori' => 'required',
       'speksifikasi' => 'required',
       'harga' => 'required',
       'stok' => 'required',
       'pemilik' => 'required',

    ]);
    $alat = new Alat;
    $alat->kategori = $request->get('kategori');
    $alat->nama_alat = $request->get('nama_alat');
    $alat->speksifikasi = $request->get('speksifikasi');
    $alat->gambar = $image_name;
    $alat->harga = $request->get('harga');
    $alat->stok = $request->get('stok');
    $alat->users_id = $request->get('pemilik');
    // dd($alat)->all;
    $alat->save();

    // $pemilik = new Pemilik;
    // $pemilik->id = $request->get('users');

    // $alat->pemilik()->associate($pemilik);
    // $alat->save();

    return redirect()->route('alat.index')->with('success', 'Alat Kamera Berhasil Ditambahkan');
    // return redirect()->route('alat.index')->with('success', 'Alat Kamera Berhasil Ditambahkan');
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
    
    $alat = Alat::find($id);
    return view('Pemilik.detailAlat', compact('alat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        //
        // $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        $alat = Alat::with('nama_pemilik')->where('id_pemilik', $id)->first();
        // $pemilik = Pemilik::all(); //mendapatkan data dari tabel kelas
        return view('Pemilik.alatEdit');
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
       'nama_alat' => 'required', 
       'kategori' => 'required',
       'speksifikasi' => 'required',
       'gambar' => 'image|file|max:1024',
       'harga' => 'required',
       'stok' => 'required',

    ]);
    $alat = new Alat;
    $alat->pemilik = $request->get('pemilik');
    $alat->kategori = $request->get('kategori');
    $alat->nama_alat = $request->get('nama_alat');
    $alat->speksifikasi = $request->get('speksifikasi');
    $alat->gambar = $image_name;
    $alat->harga = $request->get('harga');
    $alat->stok = $request->get('stok');
    $alat->save();

    return redirect()->route('alat.index')
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
