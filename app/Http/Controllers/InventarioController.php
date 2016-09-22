<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventario as Inventario;
use App\Compra as Compra;
use DB;
class InventarioController extends Controller
{
     public function getIndex(){
     	$prove=DB::table('proveedores')->get(['id','nombre']);

    	return view('inventario.registro')->with('proveedor',$prove);
    }
    public function postAdd(Request $request)
    {
    	//registro de compra

    	$compra=new Compra();
    	$compra->fecha=$request->fecha;
    	if ($request->convenio==1) {
    		$compra->convenio=$request->conv;
    		$compra->deuda=$request->deuda;
    	}else{
    		$compra->convenio="no aplica";
    		$compra->deuda="no aplica";
    	}
    	
    	$compra->pro_id=$request->pro_id;
    	$compra->save();

    	//registro de inventario
    	for ($i=0; $i < $request->cant ; $i++) { 
    		$inv= new Inventario();


    		$inv->prod_id=$request->producto[$i];
    		$inv->precio_unitario=$request->precio_unitario[$i];
    		$inv->precio_venta=$request->Precio_venta[$i];
            $inv->cantidad=$request->cantidad[$i];
    		$inv->comp_id=$compra->id;
    		$inv->save();

    	}
    	


    }
    public function getList(){
    	$inv= Inventario::all();

        
    	return view('inventario.consulta')->with('inv',$inv);
    }
}
