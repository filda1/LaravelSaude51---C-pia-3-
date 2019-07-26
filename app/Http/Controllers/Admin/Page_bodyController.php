<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Page_body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Page_bodyController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = page_body::all();
        return view('admin.page_body.show',compact('posts'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //if (Auth::user()->can('posts.create')) {
           
       // }

       return view('admin.page_body.post');
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'image' => 'required',
            
            ]);
     
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public');
    
                //$path = $request->image->getClientOriginalName();
                          
            }else{
                
                return 'No';
            }
           
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
            
            $post = new page_body;
            $post->name =  $request->name;
            $post->image = $imageName ;
            $post->text =  $request->text;   /// text de pagina
            $post->body = $name_imag_md5 ;    // nome image
           
         
            $post->save();

        //$post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

        return redirect(route('page_body.index'));
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
            $post = page_body::where('id',$id)->first();
            $tags ="";
            //$categories =category::all();
            return view('admin.page_body.edit',compact('post','id'));
       // }
        return redirect(route('admin.home'));
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
        $this->validate($request,[
            'name'=>'required',
            'image' => 'required',
            ]);

            
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        if (!empty(image) ){
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
        }else{
            $name_imag_md5 = "null"; 
        }
       
            $post = page_body::find($id);
            $post->name =  $request->name;
            $post->image = $imageName ;
            $post->text =  $request->text;   /// text de pagina
            $post->body = $name_imag_md5 ;    // nome image
            $post->save();

        return redirect(route('page_body.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        page_body::where('id',$id)->delete();
        return redirect()->back();
    }
}
