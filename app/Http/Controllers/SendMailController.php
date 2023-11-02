<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailMe;

class SendMailController extends Controller
{
    public function envoyerEmail()
    {
        $destinataire = 'jc.lejeune@insersite.org';
        Mail::to($destinataire)->send(new MailMe());

        return 'E-mail envoyé avec succès !';
    }

    public function build()
    {
        return $this->subject('Sujet de l\'e-mail')
            ->view('emails.sendmail')
            ->with([
                'variable' => 'Valeur de la variable'
            ]);
    }
}
