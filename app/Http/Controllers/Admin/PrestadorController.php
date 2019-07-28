<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prestador;

class PrestadorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
       //$this->middleware('can:posts.category');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = prestador::all();
        return view('admin.prestador.show',compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestador.post');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $category = new prestador;
        $category->especialidade = $request->especialidade;
        $category->nome = $request->nome;
        $category->morada = $request->morada;
        $category->localidade = $request->localidade;
        $category->codigo_Postal = $request->codigo_Postal;
        $category->concelho = $request->concelho;
        $category->distrito = $request->distrito;
        $category->telefone = $request->telefone;
        $category->email = $request->email;
        $category->notas = $request->notas;
        $category->preo = " ";
        $category->desconto =  " ";

       // $category->preo = $request->preo;
        //$category->desconto = $request->desconto;

        $category->save();
        return redirect(route('prestador.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = prestador::where('id',$id)->first();
        return view('admin.prestador.edit',compact('category'));
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
        $category = prestador::find($id);
        $category->especialidade = $request->especialidade;
        $category->nome = $request->nome;
        $category->morada = $request->morada;
        $category->localidade = $request->localidade;
        $category->codigo_Postal = $request->codigo_Postal;
        $category->concelho = $request->concelho;
        $category->distrito = $request->distrito;
        $category->telefone = $request->telefone;
        $category->email = $request->email;
        $category->notas = $request->notas;
        $category->preo = " ";
        $category->desconto =  " ";
        
        $category->save();

        return redirect(route('prestador.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        prestador::where('id',$id)->delete();
        return redirect()->back();
    }
}