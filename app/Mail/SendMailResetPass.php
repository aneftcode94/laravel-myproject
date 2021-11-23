<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailResetPass extends Mailable
{
    use Queueable, SerializesModels;

    public $objInfoMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($objInfoMail)
    {
        $this->objInfoMail=$objInfoMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from(env('MAIL_USERNAME'),'RESET PASSWORD')
        ->subject('RECUPERAR CONTRASEÑA')
        ->view('mails.mail');
    }
}
