<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InventarioController extends Controller
{
     public function getIndex(){
    	return view('inventario.registro');
    }

    public function getList(){
    	$users= User::all();
    	return view('inventario.consulta')->with('users',$users);
    }
}
