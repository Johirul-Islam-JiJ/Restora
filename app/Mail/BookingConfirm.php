<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirm extends Mailable
{
    use Queueable, SerializesModels;

  public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }


    public function build()
    {
        return $this->markdown('emails.DemoMail');
    }
}
