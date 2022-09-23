<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'BackOffice']);
        Role::create(['name' => 'TeamLeader']);
        Role::create(['name' => 'Sales']);
        Role::create(['name' => 'Technician']);
        Role::create(['name' => 'Client']);
    }
}
