<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $name, public string $email, public string $body)
    {
        //
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   dd();
        return $this->subject('Contact mail from eaindraag.myn@gmail.com')->replyTo($this->email)->view('email.contact');
    }
}
//the purpose of this page is that it contains all the logic of email sending