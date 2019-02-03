<?php

namespace App\Mail;

use App\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyClient extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Application
     */
    public $application;

    /**
     * Create a new message instance.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.client');
    }
}
