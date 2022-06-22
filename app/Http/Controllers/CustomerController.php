<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengunjung.homepage');
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
        return view('customer.dashboard');
    }

    public function profile() {
        return view('customer.dashboardProfile');
    }

    public function dashboardTransaksi() {
        return view('customer.dashboardTransaksi');
    }

    public function dashboardPengambilan() {
        return view('customer.dashboardPengambilan');
    }

    public function dashboardPengembilan() {
        return view('customer.dashboardPengembalian');
    }

    public function detailProduct() {
        return view('pengunjung.detailproduct');
    }

    public function detailInvoice() {
        return view('customer.transaksipembayaran');
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
    public function store(Request $request)
    {
        //
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
