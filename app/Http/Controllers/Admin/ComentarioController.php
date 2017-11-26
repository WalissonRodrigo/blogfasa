<?php

namespace blog\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class ComentarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "Comentários dos Papeis do Sistema";
    }
    
    public function cadastrar()
    {
        return "Criar Comentários dos Papeis do Sistema";
    }

    public function editar($id)
    {
        return "Editar Comentários dos Papeis do Sistema";
    }

    public function armazenar(Request $request) 
    {
        return "Guadar Comentários dos Papeis do Sistema";        
    }

    public function atualizar(Request $request)
    {
        return "Atualizar Comentários dos Papeis do Sistema";        
    }
    
    public function deletar(Request $request)
    {
        return "Apagar Comentários dos Papeis do Sistema";        
    }
}
