<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = ['id_supp','id_kategori','nama_barang','satuan','stok_awal','harga'];
    protected $primaryKey = 'id_barang';
    
    public function supplier(){
        return $this->belongsTo('App\Supllier','id_supp','id');
    }
    public function kategori(){
        return $this->belongsTo('App\Kategori','id_kategori','id');
    }

    public static function getTotalBarang(){
        return Barang::all()->sum('stok_awal'); 
    }
}
