<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VentasController extends Controller
{
    public function getIndex(){
    	return view('ventas.registro');
    }

    public function getList(){
    	$users= User::all();
    	return view('ventas.consulta')->with('users',$users);
    }
}
