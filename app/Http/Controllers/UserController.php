<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use DB;
class UserController extends Controller
{
    public function getIndex(){
    	return view('user.registrar');
    }

    public function getList(){
    	$users= User::all();
    	return view('user.consulta')->with('users',$users);
    }

    public function postAdd(Request $request){
    	$user=new User();
    	//--------------------------------------------------------------------------------
    	$user->nombre=$request->nombre;
    	$user->apellido=$request->apellido;
    	$user->cedula=$request->cedula;
    	$user->email=$request->email;
    	$user->sueldo_actual=$request->sueldo_actual;
    	$user->fecha_ingreso=$request->fecha_ingreso;
    	$user->estatus=1;
    	$user->password= password_hash($request->password, PASSWORD_BCRYPT);
    //--------------------------------------------------------------------------------

    	$user->save();
        DB::table('sueldos')->insert(
            ['sueldo' =>  $request->sueldo_actual, 'fecha' => $request->fecha_ingreso, 'porcentaje' => 100, 'user_id' => $user->id]
        );
    	return $user;

    }

    public function getEdit($id){
        $user=User::find($id);

        return view('user.editar')->with('user',$user);
    }

    public function postEdit(Request $request){
        $user=User::find($request->id);
        //-------------------------------
        $user->email= $request->email;
        $user->sueldo_actual=$request->sueldo_actual;
        $user->save();
        //-------------------------------

        //-------------------------------
        $last = DB::table('sueldos')->where('user_id', '=', $request->id)->orderBy('id', 'desc')->first();
        
        //-------------------------------

        //-------------------------------
        DB::table('sueldos')->insert(
            ['sueldo' =>  $request->sueldo_actual, 'fecha'=> date("Y-m-d"), 'user_id'=>$user->id, 'porcentaje'=> (($request->sueldo_actual*100)/$last->sueldo)-100]
        );


        //-------------------------------
        return redirect('user/list');

    }

    public function getSalary($id)
    {
       $sueldos= DB::table('sueldos')->where('user_id', '=', $id)->get();
       
       return view('user/sueldos')->with('sueldos',$sueldos);
    }
}
