<?php

namespace blog\Http\Controllers\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function about(){
        return view('blog.aboutUs');
    }

    public function contact(){
        return view('blog.contacttUs');
    }
}
