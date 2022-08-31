<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = "pembelians";
    protected $fillable = ['id_barang','jumlah','total_harga'];
    protected $primaryKey = 'id';

    public function barang(){
        return $this->belongsTo('App\Barang','id_barang','id_barang');
    }

    public static function getTotalPembelian(){
        return Pembelian::all()->sum('jumlah'); 
    }

}
