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
            'control' => '',
        ]);

        if ($validatedMessage['control'] == null) {
            // Contact form contains empty hidden input as basic spam prevention.
            // Most of the bots automatically fills all form inputs and submits form.
            // Check if control input still empty, and only then send contact email.
            // Because the input is hidden for regular user, user will not fill it manually and therefore
            // email is sent.
            Mail::to('info@zaitra.io')->send(new ContactMail($validatedMessage));
        }

        return back()->with('mail_send', 'Thanks for contacting us!');
    }
}
