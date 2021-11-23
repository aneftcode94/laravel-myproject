<?php
namespace App\Mail;

use stdClass;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    public static function SendEmail($correo){
        Mail::to($correo)->send(new SendMailResetPass(null));
    }
}
