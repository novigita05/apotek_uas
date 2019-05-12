<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";

    public function suppliers(){
        return $this->belongsTo('App\Supplier');
    }
}
