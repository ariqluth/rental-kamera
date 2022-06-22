<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tester;
class TesterController extends Controller
{
    //

    public function index()
    {
        return view('indexTester');
    }

    public function create()
    {
        //
        return view('testerCreate');
    }


    public function store(Request $request)
    {
        
    $request->validate([
        'nama' => 'required',
        'email' => 'required', 
        'password' => 'required',
        
    ]);
    $alat = new Tester;
    $alat->nama = $request->get('nama');
    $alat->email = $request->get('email');
    $alat->password = $request->get('password');
    $alat->save();
   

    return redirect()->route('tester.index')->with('success', 'Alat Kamera Berhasil Ditambahkan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
