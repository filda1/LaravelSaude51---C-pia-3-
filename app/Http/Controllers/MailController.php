<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller

{
    public function home()
    {
        return view("user.welcome");
    }

    public function send(Request $get)
    {
        $email= $get->email; 
        $name = $get->name; 
        $message = $get->message; 
        $phone = $get->phone; 
       
Mail::to('candidaturas.urh@gmail.com')->send(new DemoEmail($name,$message));
 
    }
}