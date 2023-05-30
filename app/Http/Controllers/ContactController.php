<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }




    public function send(Request $request){




        $data= [

          
         'name'=>$request->name,
         'email'=>$request->email,
         'message'=>$request->message,



        ];

               Mail::to('receiver@gmail.com')->send(new ContactMail($data));
    

           return redirect()->back()->with('message','Email sent');

}

}
