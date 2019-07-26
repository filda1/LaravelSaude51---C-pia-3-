<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$posts ="ola2";
        $posts = post::all();
        $cate = category::all();
        return view('home',compact('cate','posts'));
    }
}
