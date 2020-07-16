<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class detailMail extends Mailable
{
    use Queueable, SerializesModels;
public $inquiry ;
public $activity ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inquiry,$activity)
    {
        $this->inquiry=$inquiry;
 $this->activity=$activity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email_templates/detailMail');
    }
}
