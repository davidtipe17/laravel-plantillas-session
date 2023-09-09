<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	function index (){
    		return view('login');
	}

	function login(Request $request){
    	// Recuperamos los valores enviados desde el formulario
    	$usuario = $request->user;
    	$clave = $request->pass;
    	if($usuario=='hroman@mail.com' && $clave=='1234'){
        	// Colocamos el nombre y el rol del usuario, en sesión
        	$request->session()->put('usuario', 'Hector Roman');
        	$request->session()->put('rol', 'admin');
    	}else if($usuario=='flopez@mail.com' && $clave=='5678'){
        	$request->session()->put('usuario', 'Felipe Lopez');
        	$request->session()->put('rol', 'user');
    	}else{
         	// Redirecciono al login en caso los datos sean incorrectos
        	return redirect('/');
    	}
    	// Si los datos son correctos, redirecciono a la vista principal
    	return redirect('/principal');
	}

	function logout(Request $request){
    	// Eliminamos todos los datos de la sesión
    	$request->session()->flush();
    	// Redirecciono al login
    	return redirect('/');
	}
}
