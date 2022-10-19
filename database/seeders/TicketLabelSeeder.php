<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TicketLabel;

class TicketLabelSeeder extends Seeder
{
    public function run()
    {
        TicketLabel::unsetEventDispatcher();
        $ticket_labels = [
            [
                'id'           => 1,
                'name'         => 'open',
                'slug'         => 'open',
                'is_visible'   => true,
            ],
            [
                'id'           => 2,
                'name'         => 'verified',
                'slug'         => 'verified',
                'is_visible'   => true,
            ],
            [
                'id'           => 3,
                'name'         => 'assigned',
                'slug'         => 'assigned',
                'is_visible'   => true,
            ],
            [
                'id'           => 4,
                'name'         => 'visit',
                'slug'         => 'visit',
                'is_visible'   => true,
            ],
            [
                'id'           => 5,
                'name'         => 'closed',
                'slug'         => 'closed',
                'is_visible'   => true,
            ],
        ];

        TicketLabel::insert($ticket_labels);
    }
}
