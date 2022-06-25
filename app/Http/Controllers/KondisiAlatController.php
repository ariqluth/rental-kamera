<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Alat;
use Illuminate\Support\Facades\DB;

class KondisiAlatController extends Controller
{
    //
     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Detail_Alat::latest()->paginate(5);
        return view('Pemilik.kondisiKamera', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pemilik.kondisiKameraTambah');
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
            'kondisi_alat' => 'required',
            'sub_nama' => 'required', 
         
           
    ]);
    $detail = new Detail_Alat;
    $detail->kondisi_alat = $request->get('kondisi_alat');
    $detail->sub_nama = $request->get('sub_nama');
    $detail->save();

    return redirect()->route('kondisi-kamera.index')
    ->with('success','Kondisi kamera detail tambahakan successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $product = DB::table('detail_alat')->where('id', $id)->first();  
        return view('Pemilik.kondisiKameraUpdate',compact('product'));
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
        $request->validate([
            'kondisi_alat' => 'required',
            'sub_nama' => 'required', 
        ]);

        Detail_Alat::where('id',$id)->update([
        'kondisi_alat'=>$request->kondisi_alat,
        'sub_nama'=>$request->sub_nama
       ]);
      
        return redirect()->route('kondisi-kamera.index')
                        ->with('success','Kondisi kamera detail tambahakan successfully');

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
