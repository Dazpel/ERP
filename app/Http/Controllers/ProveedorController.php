<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProveedorController extends Controller
{
    public function getIndex(){
    	return view('proveedor.registro');
    }

    public function getList(){
    	$users= User::all();
    	return view('proveedor.consulta')->with('users',$users);
    }
}
