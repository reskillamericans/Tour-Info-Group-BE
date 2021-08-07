<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function send_email(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);

        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'msg' => $request->get('phone'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('', '')->subject('Contact');
        });

	return back()->with('success', 'Thank you for contacting us!');
    }

}
