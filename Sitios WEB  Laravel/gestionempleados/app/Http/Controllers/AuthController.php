<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller

{

    public function registrar(){

        return view('crearusuario');
    }

    public function login()
    {
                
        //$user = Auth::user();
        
        return redirect('/');

/*
        if(Auth::check()){

         
        }
  */  
    }

    public function logOut(){

        //cerramo la sesion
        //Auth::logout;

        return Redirect::to('login')->with('mensaje_de_error','no estas logeado correctamente');
    }


    public function update(Request $request)
    {

        $user = $request->user();

        return redirect('/');
    }

    


}
