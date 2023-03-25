<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function homeView()
    {
        return view('home');
    }       

    public function loginView()
    {
        return view('login');
    }

    public function cadastroView()
    {
        return view('cadastro');
    }
   

    public function minhaContaView()
    {
        return view('minha-conta');
    }

}
