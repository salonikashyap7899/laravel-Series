<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class MailController extends Controller
{
    //
     function sendEmail(Request $request)
    {
        $to = $request->input('to');
             $subject = $request->input('subject');
        $msg = $request->input('msg');
   
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Email Sent Successfully!";
    }
 
}
