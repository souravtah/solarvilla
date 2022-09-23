<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect(['SuperAdmin', 'Admin', 'BackOffice', 'TeamLeader', 'Sales', 'Technician', 'Client']);
        User::factory()
            ->count(10)
            ->create()
            ->each(function($user) use ($roles) {
                $user->assignRole($roles->random());
            });
    }
}
