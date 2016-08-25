<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $timestamps = false;
protected $table='compra';
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
}
