<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
   public $timestamps = false;
protected $table='inventario';
   public function compra()
    {
        return $this->belongsTo('App\Compra');
    }
}
