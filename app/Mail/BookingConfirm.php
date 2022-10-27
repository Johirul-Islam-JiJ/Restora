<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirm extends Mailable
{
    use Queueable, SerializesModels;

  public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }


    public function build()
    {
        return $this->markdown('emails.booking-confirmation');
    }
}
