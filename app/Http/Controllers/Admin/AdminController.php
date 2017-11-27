<?php

namespace blog\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;
use blog\Models\Posts;

use blog\Models\User;

class AdminController extends Controller
{
    private $posts;
    public function __construct(Posts $posts)
    {
        $this->middleware('auth');
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->orderBy('updated_at', 'desc')->paginate(15);
        
        if(Auth::check() && Auth::user()->isUsuario()) //Verifica se não é Administrador
            $posts = $this->posts->where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->paginate(15); //Busca os Posts do Usuário Logado apenas.
                
        return view('admin.index', compact('posts'));
    }

    /*
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
    */
}
