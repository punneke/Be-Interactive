<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\ContactController;

class SigupConfirmed extends Mailable
{
    use Queueable, SerializesModels;

        public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Melding ontvangen!')
                    ->from($request->email)
                    ->to($request->email)
                    ->view('email.confirmation_email');


        
    }
}