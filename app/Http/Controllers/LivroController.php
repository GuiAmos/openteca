<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function pesquisaLivroView()
    {
        return view('pesquisa-livro');
    }

    public function infoLivroView()
    {
        return view('info-livro');
    }

    public function meusLivrosView()
    {
        return view('meus-livros');
    }


}
