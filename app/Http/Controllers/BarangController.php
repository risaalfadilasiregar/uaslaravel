<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use App\Pembelian;
use App\Supllier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $pembelian = Pembelian::all();
        return view('barang.index',compact('barang','pembelian'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Supllier::all();
        $barang2 = Kategori::all();
        return view('barang.create',compact('barang','barang2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_supp'=>$request->id_supp,
            'id_kategori'=>$request->id_kategori,
            'nama_barang'=>$request->nama_barang,
            'satuan'=>$request->satuan,
            'stok_awal'=>$request->stok_awal,
            'harga'=>$request->harga       
        ]);

        return redirect('/barang');
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
        $barang = Barang::find($id);
        $supplier = Supllier::all();
        $kategori = Kategori::all();
        return view('barang.edit',compact('barang','supplier','kategori'));

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
        $barang = Barang::find($id);
        $barang->id_supp = $request->id_supp;
        $barang->id_kategori = $request->id_kategori;
        $barang->nama_barang = $request->nama_barang;
        $barang->satuan = $request->satuan;
        $barang->stok_awal = $request->stok_awal;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang');
    }
}
