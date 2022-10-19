<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions users
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'restore users']);
        Permission::create(['name' => 'download users']);

        // create permissions tickets
        Permission::create(['name' => 'view tickets list']);
        Permission::create(['name' => 'view all tickets']);
        Permission::create(['name' => 'edit tickets']);
        Permission::create(['name' => 'view each tickets']);
        Permission::create(['name' => 'create tickets']);
        Permission::create(['name' => 'manage tickets']);

        Role::create(['name' => 'SuperAdmin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'Admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'BackOffice']);
        Role::create(['name' => 'TeamLeader']);
        Role::create(['name' => 'Sales']);
        Role::create(['name' => 'Technician']);
        Role::create(['name' => 'Client'])
                ->givePermissionTo([
                    'view tickets list',
                    'create tickets',
                    'view each tickets'
                ]);
    }
}
