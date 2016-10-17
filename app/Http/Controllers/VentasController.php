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

    	$productos=array();
    	$ingresos=array();
    	$gastos=array();
    	$deposito=array();
    	$p=3;
    	for ($i=1; $i <= intval($request->param1[2]['value']) ; $i++) { 
    		

    		array_push($productos, [
    			"producto"=>$request->param1[$p]['value'],
    			"cantidad"=>$request->param1[$p+1]['value'],
			"precio_base"=>$request->param1[$p+2]['value']
    		]);
    		
		

		$p=$p+3;
    	}
    	array_push($ingresos, [
    		"reporteZ"=>$request->param1[$p]['value'],
    		"efectivo"=>$request->param1[$p+1]['value'],
    		"punto"=>$request->param1[$p+2]['value']
    		]);
    	$p=$p+3;
    	
    	$v=$request->param1[$p]['value'];
    	for ($i=1; $i <= $v ; $i++) { 
    		
    		array_push($gastos, [
    			"Descripcion"=>$request->param1[$p+1]['value'],
    			"monto" =>$request->param1[$p+2]['value']
    			]);
    		$p=$p+3;
    	}
    	array_push($deposito, [
    		"nro"=> $request->param1[$p]['value'],
    		"banco"=>$request->param1[$p+1]['value'],
    		"monto"=>$request->param1[$p+2]['value']

    		]);

    	$V=new V();
    	$V->ingresos=json_encode($ingresos);
	$V->venta= json_encode($productos);
	$V->gastos=json_encode($gastos);
	$V->deposito=json_encode($deposito);
	$V->save();

    	return response()->json($V);
    }
}
