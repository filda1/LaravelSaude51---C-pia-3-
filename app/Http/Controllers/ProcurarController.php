<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Compra;

class ProcurarController extends Controller
{

    public function search(){

        $search = urldecode("123");

        $ticket = compra::where('nif',$search)->first();
        

        return view('modal', compact('ticket'));

    }
}
