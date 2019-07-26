<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\aderir_cartao;
use App\post;
use App\category;
use App\contacto;
use App\page_body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Aderir_cartaoController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        $cate = category::all();
        $conta = contacto::all();
        $page = page_body::all();
        $cartao = aderir_cartao::all();

       // return view('user.aderir');
        
        return view('user.aderir',compact('cate','posts','conta','page','cartao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return redirect(route('welcome'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
		$post = new aderir_cartao;

        $post->name = $request->name;
        $post->email= $request->email;
        $post->telefone = $request->telefone;
        $post->menssagem = $request->menssagem;
        
        $post->save();

        //$post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

		return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
   
    
}