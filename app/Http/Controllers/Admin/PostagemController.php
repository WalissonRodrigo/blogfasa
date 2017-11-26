<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class PostagemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "Postagems dos Papeis do Sistema";
    }
    
    public function cadastrar()
    {
        return "Criar Postagems dos Papeis do Sistema";
    }

    public function editar($id)
    {
        return "Editar Postagems dos Papeis do Sistema";
    }

    public function armazenar(Request $request) 
    {
        return "Guadar Postagems dos Papeis do Sistema";        
    }

    public function atualizar(Request $request)
    {
        return "Atualizar Postagems dos Papeis do Sistema";        
    }
    
    public function deletar(Request $request)
    {
        return "Apagar Postagems dos Papeis do Sistema";        
    }
}
