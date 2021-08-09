<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function CadastroUser(){  //metodo cadastro de usuarios.

        $cad = 'Lista de cadastro';
        $user = ['thiago', 'diego','diogo'];

        return view('cadastros', compact('cad','user')); //passando os dados para view, pela func compact

    }
}
