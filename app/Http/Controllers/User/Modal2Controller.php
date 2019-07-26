<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\prestador;
use App\post;
use App\category;
use App\contacto;
use App\page_body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Modal2Controller extends Controller
{

    public function index()
    {
        $posts = post::all();
        $cate = category::all();
        $conta = contacto::all();
       // $page = page_body::all();
        //$presta = prestador::all();

    
        return view('user.directorio',compact('cate','posts','conta'));
    }

   
   
    
}