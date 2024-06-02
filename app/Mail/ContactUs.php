<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $userMessage;

    public function __construct($name, $email, $userMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->userMessage = $userMessage;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->userMessage,
            ]);
    }
}
