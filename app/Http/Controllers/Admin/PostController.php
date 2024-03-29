<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
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
        $posts = Post::all();
        return view('admin.post.show',compact('posts'));   
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
           $categories =category::all();
          return view('admin.post.post',compact('categories'));
       // }

       return view('admin.post.post');
       
        
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
            'title'=>'required',
            'image' => 'required',
            
            ]);
     
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public');
    
                //$path = $request->image->getClientOriginalName();
                          
            }else{
                
                return 'No';
            }
           
            $nameSubtitle = "null ";
            $nameSlug = " null";
            $nameStatus = true;

            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
            
            $post = new post;
            $post->image = $imageName ;
            $post->title =  $request->title;
            $post->subtitle = $nameSubtitle;
            $post->slug =  $nameSlug;
            $post->body = $name_imag_md5 ;
            $post->status = $nameStatus;
            $post->save();

        //$post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

        return redirect(route('post.index'));
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
            $post = post::where('id',$id)->first();
            $tags ="";
            //$categories =category::all();
            return view('admin.post.edit',compact('post','id'));
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
            'title'=>'required',
            'image'=>'required'
            ]);

            
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        if (!empty(image) ){
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
        }else{
            $name_imag_md5 = "null"; 
        }
       

       $nameSubtitle = "null ";
       $nameSlug = " null";
       $nameStatus = true;

            $post = post::find($id);
            $post->image = $imageName ;
            $post->title =  $request->title;
            $post->subtitle = $nameSubtitle;
            $post->slug =  $nameSlug;
            $post->body = $name_imag_md5;
            $post->status = $nameStatus;
            $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
