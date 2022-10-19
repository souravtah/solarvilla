<?php

namespace Database\Seeders;

use App\Enums\TicketStatus;
use App\Models\TicketLabel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TicketLabelSeeder extends Seeder
{
    public function run()
    {
        TicketLabel::unsetEventDispatcher();

        foreach(TicketStatus::cases() as $ticketStatus)
        {
            TicketLabel::create([
                'name' => $ticketStatus->name,
                'slug' => Str::slug($ticketStatus->name),
            ]);
        }

    }
}
