<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AlatController;
use App\Models\Alat;
use App\Http\Controllers\Payment\TripayController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
            $alat = Alat::with('pemilik','detail_kamera')->latest()->get(); //mengambil semua isi tabel
            $alat= Alat::orderBy('id','asc')->paginate(3);
        
        return view('pengunjung.homepage', ['alat' => $alat ,'paginate'=>$alat]);
        }
    }

  public function detail($id) {
    $alat = Alat::with('pemilik','detail_kamera')->where('id', $id)->first();
    $tripay = new TripayController();
    $channels = $tripay->getPaymentChannels();
    // dd($channels, 'abc');
    return view('pengunjung.detailproductV1', compact('alat' , 'channels'));

    ///////////////////// tester api ///////////////////////
// tester tripay
    // return view('pengunjung.detailproduct', compact('alat' , 'channels'));
  }

//   percobaan validasi
public function store(Request $request){
    $alat = Alat::find($request->id);
    $method= $request->method;
    // dd($request->all());


    $tripay = new TripayController;
    $tripay->requestTransaksi($method, $alat);
}

    public function hakAkses()
    {
        return view('Pemilik.dashboard');
    }
}
