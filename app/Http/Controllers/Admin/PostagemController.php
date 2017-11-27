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
        $posts = $this->posts->orderBy('updated_at', 'desc')->get();

        if(Auth::user()->isUsuario()) //Verifica se não é Administrador
            $posts = $this->posts->where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get(); //Busca os Posts do Usuário Logado apenas.

        return view('admin.postagens.index', compact('posts'));
    }
    
    public function postagem($id)
    {
        $posts = $this->posts->find($id);
        $comentarios = $this->comentarios->where('post_id', $id)->orderBy('created_at', 'desc')->get();

        return view('admin.postagens.postagem', compact('posts', 'comentarios'));
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
        $dataForm = $request->except('_token');
        $dataForm['user_id'] = Auth::check() ? Auth::user()->id : null;

        $insert = $this->posts->create($dataForm);
        if($insert)
            return redirect(action('Admin\PostagemController@postagem', [$insert->id]))->with(['success'=>'Postagem criada com Sucesso']);
        else
            return redirect()->back()->with(['errors'=>'Erro ao Salvar sua Postagem! Tente novamente.']);
       
    }

    public function atualizar(Request $request, $id)
    {
        $dataForm = $request->except('_token');
        $post = $this->posts->find($id);
        $update = $post->update($dataForm);
        if($update)
            return redirect(action('Admin\PostagemController@index'))->with(['success'=>'Postagem atualizada com Sucesso']);
        else
            return redirect()->back()->with(['errors'=>'Erro ao Salvar sua Postagem! Tente novamente.']);
    }
    
    public function deletar(Request $request, $id)
    {
        $post = $this->posts->find($id);
        $delete = $post->delete();
        if($delete){
            return redirect()->back()->with(['success'=>'A postagem foi apagada com sucesso.']);     
        }else{
            return redirect()->back()->with(['errors'=>'Ocorreu um erro e não foi possivel apagar o registro.']);     
        }
    }
}
