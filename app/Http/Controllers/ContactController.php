<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{

    public function send(Request $request)
    {
        $validatedMessage = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'control' => '',
            'g-recaptcha-response' => 'required',
        ]);

        if ($validatedMessage['control'] == null) {
            // Contact form contains empty hidden input as basic spam prevention.
            // Most of the bots automatically fills all form inputs and submits form.
            // Check if control input still empty, and only then send contact email.
            // Because the input is hidden for regular user, user will not fill it manually and therefore
            // email is sent.
            if ($this->recaptcha_validate($request)) {
                Mail::to('info@zaitra.io')->send(new ContactMail($validatedMessage));
            }
        }

        return back()->with('mail_send', 'Thanks for contacting us!');
    }

    private function recaptcha_validate(Request $request): bool
    {
        $recaptcha_response = (new ReCaptcha(config('app.captcha_secret_key')))
            ->setExpectedAction('contact')
            ->setScoreThreshold(0.5)
            ->verify($request->input('g-recaptcha-response'), $request->ip());
        return $recaptcha_response->isSuccess();
    }
}
