<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Compra;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Compra2Controller extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$id = Auth::user()->name;
       // $posts = compra::all();
      // $post = compra::find($id);
        //$id= " filinto" ;
       //
       // $post = compra::find($id);
       //$post = compra::where('name', 'LIKE', '%' . $id . '%');
        // $post = user::whereLike('name', $id)->get();
       // $posts = compra::where('name', $id)->first();

       $id = 1;
    $posts = compra::where ( 'id', 'LIKE', '%' . $id. '%' )
                       ->get ();

        return view('user.compra2.show',compact('posts'));   
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //if (Auth::user()->can('posts.create')) {
           
           $tags ="";
           $categories = compra::all();
          return view('user.compra2.post',compact('categories'));
       // }

       return view('user.compra2.post');
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public');
    
                //$path = $request->image->getClientOriginalName();
                          
            }else{
                
                return 'No';
            }
           
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
            
            $post = new compra;
            $post->email =  $request->email;
            $post->name =  $request->name;
            $post->nif =  $request->nif;
            $post->name_prestador =  $request->name_prestador;
            $post->cartao =  $request->cartao;
            $post->image = $imageName;
            $post->promocoes = "";
            $post->vauchers = "";
            $post->body = $name_imag_md5;
            $post->n2 =  "";
            $post->n3 =  "";

            $post->save();

        //$post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

        return redirect(route('compra2.index'));
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
       

       // if (Auth::user()->can('posts.update')) {

            $post = compra::where('id',$id)->first();
            return view('user.compra2.edit',compact('post','id'));
       // }
     
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

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');

            //$path = $request->image->getClientOriginalName();
                      
        }else{
            
            return 'No';
        }
    
        $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
       

            $post = compra::find($id);
            $post->email =  $request->email;
            $post->name =  $request->name;
            $post->nif =  $request->nif;
            $post->name_prestador =  $request->name_prestador;
            $post->cartao =  $request->cartao;
            $post->image = $imageName;
            $post->promocoes = "";
            $post->vauchers = "";
            $post->body = $name_imag_md5;
            $post->n2 =  "";
            $post->n3 =  "";
           

            $post->save();

        return redirect(route('compra2.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        compra::where('id',$id)->delete();
        return redirect()->back();
    }
}
