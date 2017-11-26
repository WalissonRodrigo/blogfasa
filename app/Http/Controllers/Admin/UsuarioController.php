<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return "Usuarios dos Papeis do Sistema";
    }
    
    public function cadastrar()
    {
        return "Criar Usuarios dos Papeis do Sistema";
    }

    public function editar($id)
    {
        return "Editar Usuarios dos Papeis do Sistema";
    }

    public function armazenar(Request $request) 
    {
        return "Guadar Usuarios dos Papeis do Sistema";        
    }

    public function atualizar(Request $request)
    {
        return "Atualizar Usuarios dos Papeis do Sistema";        
    }
    
    public function deletar(Request $request)
    {
        return "Apagar Usuarios dos Papeis do Sistema";        
    }
}
