<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
class UserController extends Controller
{
    public function getIndex(){
    	return view('user.registrar');
    }

    public function getList(){
    	$users= User::all();
    	return view('user.consulta')->with('users',$users);
    }
}
