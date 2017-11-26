<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class PermissaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "Funções dos Papeis do Sistema";
    }
    
    public function cadastrar()
    {
        return "Criar Funções dos Papeis do Sistema";
    }

    public function editar($id)
    {
        return "Editar Funções dos Papeis do Sistema";
    }

    public function armazenar(Request $request) 
    {
        return "Guadar Funções dos Papeis do Sistema";        
    }

    public function atualizar(Request $request)
    {
        return "Atualizar Funções dos Papeis do Sistema";        
    }
    
    public function deletar(Request $request)
    {
        return "Apagar Funções dos Papeis do Sistema";        
    }
}
