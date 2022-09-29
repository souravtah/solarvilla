<?php

namespace Database\Seeders;

use App\Models\TicketCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketCategory::unsetEventDispatcher();
        $ticket_categories = [
            [
                'id'           => 1,
                'name'         => 'General query',
                'slug'         => 'general-query',
                'is_visible'   => true,
            ],
            [
                'id'           => 2,
                'name'         => 'Sales query',
                'slug'         => 'sales-query',
                'is_visible'   => true,
            ],
            [
                'id'           => 3,
                'name'         => 'Product inquiry',
                'slug'         => 'product-inquiry',
                'is_visible'   => true,
            ],
            [
                'id'           => 4,
                'name'         => 'Product Support query',
                'slug'         => 'product-support-query',
                'is_visible'   => true,
            ],
            [
                'id'           => 5,
                'name'         => 'Others',
                'slug'         => 'others',
                'is_visible'   => true,
            ],
        ];

        TicketCategory::insert($ticket_categories);
    }
}
