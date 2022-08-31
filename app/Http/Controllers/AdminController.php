<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Pembelian;
use App\Penjualan;
// use App\Supllier;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('awal.index');
        $barang = Barang::all();
        $data = [
            'barang' => $barang,
            'total_stok' => Barang::getTotalBarang()
        ];
            // return view('awal.index',$data);

        $jual = Penjualan::all();
        $data2 = [
            'jual' => $jual,
            'total_jumlah' => Penjualan::getTotalPenjualan()
        ];
        $beli = Pembelian::all();
        $data3 = [
            'beli' => $beli,
            'total_jml' => Pembelian::getTotalPembelian()
        ];

            return view('awal.index',$data,$data2,$data3);




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
