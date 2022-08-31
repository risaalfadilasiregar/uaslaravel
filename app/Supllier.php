<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supllier extends Model
{
    protected $table = "suplliers";
    protected $fillable = ['id','nama_supp','telp_supp','alamat_supp'];


}
