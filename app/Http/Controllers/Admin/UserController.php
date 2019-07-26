<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
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
        $posts = user::all();
        return view('admin.user.show',compact('posts'));   
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
           $categories =user_prestador::all();
          return view('admin.user.post',compact('categories'));
       // }

       return view('admin.user.post');
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $post = new user;
            $post->email =  $request->email;
            $post->name =  $request->name;
        
            $post->save();

        //$post->tags()->sync($request->tags);
        //$post->categories()->sync($request->categories);

        return redirect(route('user.index'));
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

            $post = user::where('id',$id)->first();
            return view('admin.user.edit',compact('post','id'));
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
           
            $post = user::find($id);
            $post->email =  $request->email;
            $post->name =  $request->name;
          
            $post->save();

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::where('id',$id)->delete();
        return redirect()->back();
    }
}
