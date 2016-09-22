<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Compra as Compra;
use App\Inventario as Inv;
class CompraController extends Controller
{
    public function index($id)
    {
    	$inv= Inv::where('comp_id',$id)->get();
    		
    	return view('compra.list')->with('inv', $inv);
    }
}
