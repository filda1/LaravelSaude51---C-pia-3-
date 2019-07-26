<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PersonController extends Controller
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
        $posts = user::all();
        return view('home',compact('posts'));   
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
           $categories =user::all();
          return view('user.person.post',compact('categories'));
       // }

       return view('user.person.post');
       
        
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

        return redirect(route('person.index'));
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
           // $Sesionid = Auth::user()->id ;

            $post = user::where('id', $id )->first();
            return view('user.person.edit',compact('post','id'));
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
            ///$Sesionid = Auth::user()->id ;
           
            $post = user::find($id);
            $post->email =  $request->email;
            $post->name =  $request->name;
          
            $post->save();

        return redirect(route('person.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$Sesionid = Auth::user()->id ;

        user::where('id', $id)->delete();
        return redirect()->back();
    }
}
