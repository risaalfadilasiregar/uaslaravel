<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = "penjualans";
    protected $fillable = ['id_barang','jumlah','total_harga'];

    public function barang(){
        return $this->belongsTo('App\Barang','id_barang','id_barang');
    }

    public static function getTotalPenjualan(){
        return Penjualan::all()->sum('jumlah'); 
    }

}
