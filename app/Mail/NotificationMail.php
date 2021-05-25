<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cost;
    public $date;
    public $voliation;
    public function __construct($c,$d,$v)
    {
        $this->cost = $c;
        $this->date = $d;
        $this->voliation = $v;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Verification")->markdown('email.notification');
    }
}
