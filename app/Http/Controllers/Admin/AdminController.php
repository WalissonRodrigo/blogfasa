<?php

namespace blog\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function postagems()
    {
        
    }
    
    public function cadastrar()
    {
        return "Cadastro de Posts do Administrador";
    }

    public function editar($id)
    {
        return "Editar do Administrador";
    }

    public function armazenar(Request $request) 
    {
        return "Armazenar Posts do Administrador";
    }

    public function atualizar(Request $request)
    {
        return "Atualizar os Posts do Administrador";
    }
    
    public function deletar(Request $request)
    {
        if(Auth::user()->isAdministrador()){
            return "Deletar os Posts como Administrador";
        }else{
            return "Cadastro de Posts como Moderador";
        }
    }
}
