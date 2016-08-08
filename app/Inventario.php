<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
   public $timestamps = false;

   public function compra()
    {
        return $this->belongsTo('App\Compra');
    }
}
