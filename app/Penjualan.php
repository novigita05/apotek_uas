<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    public function get_obat(){
        return $this->belongsTo(Obat::class, 'obat_idObat', 'idObat');
    }
}
