<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // https://www.websupport.sk/support/kb/postove-protokoly/

    /**
     * @var mixed
     */
    private $contact_form_input;

    /**
     * Create a new message instance.
     *
     * @param array $contact_form_input
     */
    public function __construct(array $contact_form_input)
    {
        $this->contact_form_input = $contact_form_input;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('email.contact')
            ->from('info@zaitra.io')
            ->subject('Zaitra contact from ' . $this->contact_form_input['name'])
            ->with([
                'name' => $this->contact_form_input['name'],
                'email' => $this->contact_form_input['email'],
                'contact_message' => $this->contact_form_input['message'],
            ]);
    }
}
