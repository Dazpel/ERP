<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto as Producto;
class ProductoController extends Controller
{
    public function getIndex()
    {
    	return view('producto.registro');
    }

    public function postAdd(Request $request)
    {
    	$producto= new Producto();

    	$producto->nombre=$request->producto;
    	$producto->descripcion=$request->descripcion;
    	$producto->save();

    	return redirect('producto/list');
    }

    public function getPr()
    {
    	$producto= Producto::all();
    	return response()->json($producto);
    }

    public function getList()
    {
    	$productos=Producto::all();
    	return view('producto.list')->with('productos', $productos);
    }
}
