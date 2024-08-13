<?php

namespace App\Http\Controllers\Auth;
//namespace App\Http\Controllers\Resources\auth;



use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrarController extends Controller
{
    public function create()
    {
        return view('registrar');

    }

    public function store(Request $request)
    {
        /* 
        Validation

          'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',

             'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        */
        $request->validate([
            'name',
            'email',
            'password'=>'required|min:4' ,
        ]);

        /*
        Database Insert
        */
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
           
        ]);
//hask::make
      Auth::login($user);

      return redirect(RouteServiceProvider::HOME);
    }
}



