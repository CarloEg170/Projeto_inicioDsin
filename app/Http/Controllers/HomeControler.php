<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeControler extends Controller{

    public function home(){
        return view('site.home');
    }

    public function cadastro(){
        return view('cadastro.cadastro');
    }
}

