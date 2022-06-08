<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $firstName;
    public $lastName;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email = $request['email'];
        $this->firstName = $request['name'];
        $this->lastName = $request['surname'];
        $this->title = $request['title'];
        $this->message = $request['message'];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->email);
        return $this->from($this->email, $this->firstName . " " . $this->lastName)
                    ->to('obinna@kijii.app')
                    ->subject("{$this->title}")
                    ->markdown('emails.contact-us', [
                        'message' => $this->message,
                        'title' => $this->title,
                    ]);
    }
}
