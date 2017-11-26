<?php

namespace blog\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use blog\Http\Controllers\Controller;
use blog\Models\Posts;
use blog\Models\User;
use blog\Models\Comentarios;

class PostagemController extends Controller
{
    private $posts;
    private $comentarios;

    public function __construct(Posts $posts, Comentarios $comentarios)
    {
        $this->middleware('auth');
        $this->posts = $posts;
        $this->comentarios = $comentarios;
    }

    public function index()
    {
        $posts = $this->posts->all();

        if(Auth::user()->isUsuario()) //Verifica se não é Administrador
            $posts = $this->posts->where('user_id', Auth::user()->id); //Busca os Posts do Usuário Logado apenas.

        $success = "Foram encontradas ".$posts->count()." postagems!"; //Menssagem de Sucesso no Carregamento.
        return view('admin.postagens.index', compact('posts', 'success'));
    }
    
    public function postagem($id)
    {
        $posts = $this->posts->find($id);
        return view('admin.postagens.cadastrar-editar', compact('posts'));
    }

    public function cadastrar()
    {
        return view('admin.postagens.cadastrar-editar');
    }

    public function editar($id)
    {
        $posts = $this->posts->find($id);
        return view('admin.postagens.cadastrar-editar', compact('posts'));
    }

    public function armazenar(Request $request) 
    {
        return "Guadar Postagems dos Papeis do Sistema";        
    }

    public function atualizar(Request $request)
    {
        return "Atualizar Postagems dos Papeis do Sistema";        
    }
    
    public function deletar(Request $request, $id)
    {
        $post = $this->posts->find($id);
        $delete = $post->delete();
        if($delete){
            $success = "A postagem foi apagada com sucesso."; //Menssagem de Sucesso no Carregamento.
            return redirect()->back()->with(['success'=>$success]);     
        }else{
            $erros = "Ocorreu um erro e não foi possivel apagar o registro."; //Menssagem de Sucesso no Carregamento.
            return redirect()->back()->with(['erros'=>$erros]);     
        }
    }
}
