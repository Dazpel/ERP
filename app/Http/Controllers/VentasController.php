<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas as V;
use App\Http\Requests;

class VentasController extends Controller
{
    public function getIndex(){
    	return view('ventas.registro');
    }

    public function postAdd(Request $request){
    	return response()->json($request);
    }
}
