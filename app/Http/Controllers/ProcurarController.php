<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Compra;

class ProcurarController extends Controller
{

    public function search($search){
   
        $search = urldecode($search);
        $search1 = '123' ;

        $ticket = compra::where('nif',$search1)->first();
        

        return view('modal', compact('ticket'));

    }
}
