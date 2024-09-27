<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
use App\Models\Contact;


class ContactController extends Controller
{
    // public function contact(){
    //      return view('contact');
    // }
    public function sendEmail(Request $request)
    {
        $details = [ 
            'name' => $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request ->message
        ];
        $user= new Contact;
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->subject = $request->input('subject');
        $user->message= $request->input('message');
       if(Mail::to('site@forsoft.ma')->send(new ContactMail($details))){
        $user->save();
       } ;
     
    return redirect()->route('contact');
    }

}
