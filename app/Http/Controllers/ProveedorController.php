<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Proveedor as Proveedor;
class ProveedorController extends Controller
{
    public function getIndex(){
    	return view('proveedor.registro');
    }

    public function getList(){
    	$proveedors= Proveedor::all();
    	return view('proveedor.consulta')->with('proveedors',$proveedors);
    }

     public function postAdd(Request $request){
    	$proveedor=new Proveedor();
    	//--------------------------------------------------------------------------------
    	$proveedor->nombre=$request->nombre;
    	$proveedor->telf=$request->telefono;
      $proveedor->rif=$request->rif;
    	$proveedor->direccion=$request->direccion;
    	$proveedor->correo=$request->email;

    //--------------------------------------------------------------------------------

    	$proveedor->save();

    	return redirect('proveedor/list');

    }
}
