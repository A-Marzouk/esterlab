<?php

namespace App\Mail;

use App\classes\Telegram;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $registerData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registerData)
    {
        $this->registerData = $registerData ;
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
            ->subject('New client has registered!')
            ->view('emails.registerNotify');
    }

    public function NotifyToTelegram(){
            $telegram = new Telegram(env('TELEGRAM_CHAT_ID'));
            $msg      = "New client has registered (Esterlab) .\n" ;
            $msg     .= "Name : ". $this->registerData['name']. " \n";
            $msg     .= "Company : ". $this->registerData['company']. " \n";
            $msg     .= "Email : ". $this->registerData['email']. " \n";
            $msg     .= "Date & time : ". date(now()) . " \n";

            $telegram->sendMessage($msg);

    }

}
