<?php

namespace App\Models;

use App\Enums\TicketStatus;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Ticket extends \Coderflex\LaravelTicket\Models\Ticket
{
    // use HasFactory;
    protected $casts    = ['status' => TicketStatus::class];
}
