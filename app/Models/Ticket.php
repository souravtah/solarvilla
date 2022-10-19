<?php

namespace App\Models;

use App\Enums\TicketStatus;

// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;

class Ticket extends \Coderflex\LaravelTicket\Models\Ticket
{
    // use InteractsWithMedia;

    protected $casts    = ['status' => TicketStatus::class];


}
