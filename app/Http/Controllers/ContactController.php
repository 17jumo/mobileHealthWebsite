<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;
use App\Mail\Contactme;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{



    public function contact(){
        return view('contactus.blade');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        Mail::send('mail.email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'comment' => $request->get('comment') ],
            function ($message) {
                $message->from('info@mobilehealth.com');
                $message->to('info@mobilehealth.com', 'Info')
                    ->subject('Your Website Contact Form');
            });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}
