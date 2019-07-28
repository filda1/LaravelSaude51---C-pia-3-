<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail2;
use Illuminate\Support\Facades\Mail;
//use Mail;
use App\Sendemail;


class Mail2Controller extends Controller

{
    public function home()
    {
        return view("user.aderir");
    }

    public function send(Request $get)
    {
        $email= $get->email; 
        $name = $get->name; 
        $message = $get->message; 
        $phone = $get->phone; 
       
        //Mail::to('candidaturas.urh@gmail.com')->send(new DemoEmail2($name,$message));

        Mail::to('filintmeireles@gmail.com')->send(new DemoEmail2($name,$message));
 
    }
}