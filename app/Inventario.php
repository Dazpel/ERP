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

    public function producto()
    {
    	return $this->belongsTo('App\Producto', 'prod_id','id');
    }
}
