<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contactform;
use Mail;

class MailController extends Controller
{
    public function sendMail(request $request){
    	$mail= new Contactform;
    	$mail->name=request('name');
    	$mail->mail=request('email');
    	$mail->subject=request('subject');
    	$mail->message=request('message');
    	$mail->save();
    	Mail::send(['html'=>'travel.mail'], ["data"=>$request->all()], function($message) {
                $message->from(request('email') , request('name'));
                $message->to(env('MAIL_USERNAME'), request('name'))->subject('Contact Form');
            });
    	return back()->with('success','Contact Sucessfully Submitted');
    }

}
