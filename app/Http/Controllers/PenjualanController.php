<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        $barang = Barang::all();
        return view('penjualan.index',compact('penjualan','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('penjualan.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $id_barang = $request->id_barang;
        $barang = Barang::find($id_barang);
 
        $data['total_harga'] = $data['jumlah'] * $barang['harga'];
 
        Penjualan::create($data);
        $barang['stok_awal'] = $barang['stok_awal'] - $data['jumlah'];
        $barang->update();
        $d = Barang::find($id_barang);
        $z = Penjualan::all()->sortByDesc('id')->take(1);
        return view('penjualan.cetak', [
            'data' => $data,
            'd' => $d,
            'z' => $z
        ]);
 
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
