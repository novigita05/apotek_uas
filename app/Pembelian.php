<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
   protected $table = 'pembelian';

    public function get_obat(){
        return $this->belongsTo(Obat::class, 'obat_idObat', 'idObat');
    }

    public function get_supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_idSupplier', 'idSupplier');
    }
}
