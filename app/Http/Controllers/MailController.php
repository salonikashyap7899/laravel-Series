<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class MailController extends Controller
{
    //
    function sendEmail(){
        $to="ayuanukashyap@gmail.com";
        $msg="Hello from Laravel";
        $subject="Test Email from Laravel";
           Mail::to($to)->send(new WelcomeEmail($msg,$subject));
    return "Email Sent"; 
    }
 
}
