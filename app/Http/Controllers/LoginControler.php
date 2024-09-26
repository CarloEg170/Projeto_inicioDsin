<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginControler extends Controller
{
    public function login()
    {
        return view('login_.login');
    }

    public function postLogin(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' =>  $request->password])) {
            if(Auth::user()->nivel == "usuario"){
                return redirect()->route('usuario');
            }
            if(Auth::user()->nivel == "administrador"){
           return redirect()->route('admin.home');}

        } else {
            return redirect()->back()->withInput()->with('error', 'E-mail ou Senha inválido!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
