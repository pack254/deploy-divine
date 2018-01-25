<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DiveMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $title, $email, $tel, $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $email, $tel, $message)
    {
        $this->title = $title;
        $this->email = $email;
        $this->tel = $tel;
        $this->msg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->markdown('emails.customercontact')->with(['title' => $this->title,
                                                              'email' =>   $this->email,
                                                              'tel' => $this->tel,
                                                              'msg' => $this->msg ]);
    }
}
