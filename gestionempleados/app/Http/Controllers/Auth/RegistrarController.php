<?php

namespace App\Http\Controllers\Auth;
//namespace App\Http\Controllers\Resources\auth;



use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



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
        */
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        /*
        Database Insert
        */
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

      Auth::login($user);

      return redirect(RouteServiceProvider::HOME);
    }
}



