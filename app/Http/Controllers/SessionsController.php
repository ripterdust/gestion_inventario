<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // Login
    public function create(){
        return view('auth.login');
    }

    // Store user
    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'Correo o contraseña erróneos'
            ]);
        }

        return redirect()->route('home');
    }

    // Logout

    public function destroy(){
        auth()->logout();
        return redirect()->route('home');
    }

    // Account view
    public function show(){
        $response = [
            'user' => auth()->user()
        ];

        return view('auth.account', $response);
    }

   
}
