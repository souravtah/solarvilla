<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountCreatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.vendor.message')
                ->subject('Your SolarVilla account has been created successfully')
                ->line('Welcome to SolarVilla')
                ->line('You may raise support tickets after login')
                ->action('Login to view your dashboard', url('/'))
                ->line('Thank you for using Solarvilla!');
    }
}
