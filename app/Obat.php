<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "obat";

    public function penjualans(){
        return $this->belongsTo('App\Penjualan');
    }

    public function pembelians(){
        return $this->belongsTo('App\Pembelian');
    }
}
