<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Contacto;
use App\Page_body;

class ModalController extends Controller
{
    
    public function index()
    {
        //$posts ="ola2";
        $posts = post::all();
        $cate = category::all();
        $conta = contacto::all();
        $page = page_body::all();
        return view('modal',compact('cate','posts','conta','page'));
        //return view('user.welcome')-> with('posts',$posts);
    }
}