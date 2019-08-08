<?php

namespace App\Mail;

use App\classes\Telegram;
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
        $this->NotifyToTelegram();
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

    public function NotifyToTelegram(){
            $telegram = new Telegram('493677049');
            $msg      = "New contact form submission (Esterlab) .\n" ;
            $msg     .= "Name : ". $this->contactData['name']. " \n";
            $msg     .= "Mobile number : (+". $this->contactData['countryCode'] . ") ". $this->contactData['mobile_number'] ."  \n";
            $msg     .= "Date & time : ". date(now()) . " \n";

            $telegram->sendMessage($msg);

    }

}
