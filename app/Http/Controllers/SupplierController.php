<?php

namespace App\Http\Controllers;

use App\Supllier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supllier::all();
        return view('supllier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $supplier = Supllier::all();
        return view('supllier.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supllier::create([
            'nama_supp' => $request->nama_supp,
            'telp_supp' => $request->telp_supp,
            'alamat_supp' => $request->alamat_supp
        ]);
        return redirect('/supllier');
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
        $supplier = Supllier::find($id);
        return view('supllier.edit',compact('supplier'));
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
        $supplier = Supllier::find($id);
        $supplier->nama_supp = $request->nama_supp;
        $supplier->telp_supp = $request->telp_supp;
        $supplier->alamat_supp = $request->alamat_supp;
        $supplier->save();

        return redirect('/supllier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supllier::find($id);
        $supplier->delete();

        return redirect('/supllier');
    }
}
