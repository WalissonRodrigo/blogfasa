<?php

namespace blog\Http\Controllers\Blog;

use blog\Http\Controllers\Controller;
use Illuminate\Http\Request;
use blog\Models\Posts;
use blog\Models\Comentarios;
use blog\Models\Tags;

class PostsController extends Controller
{

    private $posts;
    private $comment;

    public function __construct(Posts $posts, Comentarios $comment){
        $this->posts = $posts;
        $this->comment = $comment;
    }

    public function posts(){
        $posts = $this->posts->paginate(10);
        return view('blog.posts.index', compact('posts'));
    }

    public function detail($post_id){
        $post = $this->posts->find($post_id);
        return view('blog.samplePost', compact('post'));
    }

    public function form(){
        return view('blog.postCreate');
    }

    public function create(Request $request){
        $this->posts->create($request->all());
        return redirect('/');
    }

    public function comment(Request $request){
        $this->comment->create($request->all());
        return redirect()->route('/detail', $request->post_id);
    }
}
