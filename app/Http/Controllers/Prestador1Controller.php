<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prestador;

class Prestador1Controller extends Controller
{
    public function search($search){

        return  urldecode($search);
       // $search = urldecode($search);

       // $ticket = user_prestador::where('nif',$search)->first();
        

       // return view('modal', compact('ticket'));

    }
}