<?php

namespace blog\Http\Controllers\Blog;

use blog\Http\Controllers\Controller;
use Illuminate\Http\Request;
use blog\Models\Posts;
use blog\Models\Comentarios;

class BlogController extends Controller
{

    private $posts;
    private $comment;

    public function __construct(Posts $posts, Comentarios $comment){
        $this->posts = $posts;
        $this->comment = $comment;
    }

    public function index()
    {
        $posts = $this->posts->paginate(10);
        return view('blog.posts.index', compact('posts'));
    }

    public function detalhes($post_id)
    {
        $post = $this->posts->find($post_id);
        return view('blog.samplePost', compact('post'));
    }

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

    public function atualizar()
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
}
