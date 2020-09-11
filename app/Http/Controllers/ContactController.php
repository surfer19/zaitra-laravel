<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function send(Request $request)
    {
        $validatedMessage = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('info@zaitra.io')->send(new ContactMail($validatedMessage));

        return back()->with('mail_send', 'Thanks for contacting us!');
    }
}
