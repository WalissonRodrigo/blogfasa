<?php

namespace blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
        return view('admin.index');
    }
    
    public function cadastrar()
    {

    }

    public function editar($id)
    {

    }

    public function armazenar(Request $request) 
    {

    }

    public function atualizar(Request $request)
    {
        # code...
    }
    
    public function deletar(Request $request)
    {
        if(Auth::user()->isAdministrador()){

        }
    }
}
