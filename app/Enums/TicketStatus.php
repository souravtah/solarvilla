<?php

namespace App\Enums;

enum TicketStatus: String {
    case open               = 'open';
    case verified           = 'verified';
    case assigned           = 'assigned';
    case visit              = 'visit';
    case closed             = 'closed';
}
