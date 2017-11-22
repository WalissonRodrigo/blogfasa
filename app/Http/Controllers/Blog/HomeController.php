<?php

namespace blog\Http\Controllers\Blog;
use blog\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('access-admin')){
            return view('home');
        }

        return redirect(env('URL_ADMIN_LOGIN'));
    }
}
