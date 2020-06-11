<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationSoon extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    private $viewing;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('reservation@traffy.id.lv')
            ->view('reservation_soon')->with([
                'reservation' => $this->reservation,
            ])->subject(__('messages.emailsubject'));
    }
}
