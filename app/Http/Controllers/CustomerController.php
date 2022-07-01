<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\Customer;
use App\Models\Transaksi;
use App\Models\Pemilik;
use App\Models\Pengambilan;
use App\Http\Controllers\Payment\TripayController;


class CustomerController extends Controller
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
    
    
    
    public function homepage()
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
        }
        
        return view('customer.homepage', compact('alat'));
    }
    
    
    public function detail($id) {
        $alat = Alat::with('pemilik','detail_kamera')->where('id', $id)->first();
        return view('customer.detailproduct', compact('alat'));
    }
    
    public function pembayaran($id) {
        $alat = Alat::with('customer','detail_kamera')->where('id', $id)->first();
        $tripay = new TripayController();
        $channels = $tripay->getPaymentChannels();
        return view('customer.pembayaran', compact('alat', 'channels'));
    }
    
    
    //   percobaan validasi
    public function store(Request $request){
        // request transaksi in tripay
        $alat = Alat::find($request->id);
        $method= $request->method;
        $tripay = new TripayController;
        $transaksi = $tripay->requestTransaksi($method, $alat);
        // dd($alat->id);
        
        // create a new data in transaksi model 
        Transaksi::create([
            'id_customer'=> auth()->user()->id,
            'id_pemilik'=> $alat->users_id,
            'reference' => $transaksi->reference,
            'merchant_ref' => $transaksi->merchant_ref,
            'bank_tujuan' => $transaksi->payment_name,
            'harga' => $transaksi->amount ,
            'alat_id'=> $alat->id,
            'status' => $transaksi->status,
            
        ]);
        
        
        
        
        return redirect()->route('transaksi.detail', [
            'reference' => $transaksi->reference]);
        }
        
        
        public function transaksidetail($reference){
            $tripay = new TripayController();
            $detail =  $tripay->detailTransaksi($reference);
            
            return view('customer.transaksiDetail', compact('detail'));
        }
        
        
        
        
        public function categoryDSLR() {
            return view('pengunjung.detailDSLR');
        }
        
        public function categoryMirrorless() {
            return view('pengunjung.detailMirrorless');
        }
        
        public function categoryActionCamera() {
            return view('pengunjung.detailActionCamera');
        }
        
        public function categoryVideoSupport() {
            return view('pengunjung.detailVideoSupport');
        }
        
        public function contact() {
            return view('pengunjung.contact');
        }
        
        public function about() {
            return view('pengunjung.about');
        }
        
        public function dashboardDetail() {
            $transaksi = Transaksi::latest()->get();
            return view('customer.dashboard',compact('transaksi'));
        }
        
        public function profile() {
            return view('customer.dashboardProfile');
        }
        
        public function dashboardTransaksi() {
            $transaksi = Transaksi::latest()->get();
            
            return view('customer.dashboardTransaksi',compact('transaksi'));
        }
        
        public function dashboardPengambilan() {
            $transaksi = Transaksi::latest()->get();
            return view('customer.dashboardPengambilan', compact('transaksi'));
        }
        
        public function dashboardPengambilantambah() {
            $pemilik = Pemilik::all();
            $transaksi = Transaksi::all();
            return view('customer.dashboardPengambilanTambahkan', compact('transaksi', 'pemilik'));
        }
        
        public function dashboardPengambilanstore(Request $request) {
            $pemilik = Pemilik::all();
            $transaksi = Transaksi::all();
            
            
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
            
            // $pemilik = new Pemilik;
            // $pemilik->id = $request->get('users');
            
            // $alat->pemilik()->associate($pemilik);
            // $alat->save();
            
            return redirect()->route('pengambilan')->with('success', 'Alat Kamera Berhasil Ditambahkan');
            
            
        }
        
        
        public function dashboardPengembilan() {
            return view('customer.dashboardPengembalian');
        }
        
        public function detailProduct() {
            return view('customer.detailproduct');
        }
        
        public function detailInvoice() {
            return view('customer.transaksipembayaran');
        }
        
        public function index() {
            
        }
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            
        }
        
        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        // public function store(Request $request)
        // {
            //     //
            // }
            
            /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
            */
            public function show($id)
            {
                $user = Customer::with('alat')->where('id', $id)->first();
                return view('customer.profile', compact('user'));
            }
            
            /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return \Illuminate\Http\Response
            */
            public function edit($id)
            {
                $user = Customer::with('alat')->where('id', $id)->first();
                return view('customer.profile', compact('user'));
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
        