<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to(config('mail.recipients'))
            ->replyTo(config('mail.from.address'), 'noreply')
            ->subject('New contact form submission!')
            ->view('emails.contactUsNotify');
    }
}
