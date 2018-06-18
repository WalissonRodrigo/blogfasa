<?php

namespace blog\Http\Controllers\API;

use Auth;
use blog\Http\Controllers\Controller;
use Illuminate\Http\Request;
use blog\Models\Posts;
use blog\Models\Comentarios;

class PostagemController extends Controller
{

    private $posts;
    private $comment;

    public function __construct(Posts $posts, Comentarios $comment){
        $this->posts = $posts;
        $this->comment = $comment;
        $this->middleware('guest');
    }

    public function index()
    {
        $posts = $this->posts->orderBy('updated_at', 'desc')->get();
        return response()->json(['data'=>$posts]);
    }

    public function postagem($post_id)
    {
        $posts = $this->posts->find($post_id);
        return response()->json(['data'=>$posts]);
    }

    public function cadastar(Request $request)
    {
        $post = $this->posts;
        $insert = $post->create($request->all());
        if($insert){
            $message = ["message"=>"Registro Criado com sucesso!", "status"=>201];
            return response()->json(['data'=>$message]);
        }else{
            $message = ["message"=>"Ocorreu um erro ao criar o registro! Tente novamente ou acesso o site.", "status"=>500];
            return response()->json(['data'=>$message]);
        }
    }

    public function atualizar(Request $request, $id)
    {
        $post = $this->posts->find($id);
        $update = $post->update($request->all());
        if($update){
            $message = ["message"=>"Registro Atualizado com sucesso!", "status"=>202];
            return response()->json(['data'=>$message]);
        }else{
            $message = ["message"=>"Ocorreu um erro ao atualizar o registro! Tente novamente ou acesso o site.", "status"=>500];
            return response()->json(['data'=>$message]);
        }
    }

    public function deletar($id)
    {
        $post = $this->posts->find($id);
        $delete = $post->delete();
        if($delete){
            $message = ["message"=>"Registro Apagado com sucesso!", "status"=>202];
            return response()->json(['data'=>$message]);
        }else{
            $message = ["message"=>"Ocorreu um erro ao apagar o registro! Tente novamente ou acesso o site.", "status"=>500];
            return response()->json(['data'=>$message]);
        }
    }
    /*

    public function editar($id)
    {
        $post = $this->posts->find($id);
        return view('blog.posts.create-edit', compact('post'));
    }

    public function postar(Request $request)
    {
        view('blog.posts.create-edit');
    }

    public function armazenar()
    {

    }

    
    public function comentar(Request $request, $idPost)
    {
        $this->comment->create($request->all());
        return redirect()->route('/detail', $request->post_id);
    }

    public function editarComentario($idPost, $idComentario, Request $request)
    {
        $form = $request->except('_token');
        $comments = $this->comment->find($idComentario);
        $update = $comments->update($form);
        if($update)
            return redirect()->action('Blog\BlogController@detalhes', $idPost)->with(['success'=>'Seu comentário foi Editado com Sucesso!']);
        else
            return redirect()->back()->with(['erros'=>'Não foi possivel editar seu comentário. Tente mais tarde!']);
    }

    */
}
