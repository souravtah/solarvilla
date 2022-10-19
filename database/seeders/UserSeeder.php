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
        // $roles = collect(['SuperAdmin', 'Admin', 'BackOffice', 'TeamLeader', 'Sales', 'Technician', 'Client']);
        // User::factory()
        //     ->count(2)
        //     ->create()
        //     ->each(function($user) use ($roles) {
        //         $user->assignRole($roles->random());
        //     });
        User::unsetEventDispatcher();
        User::create([
                'name'           => 'SuperAdmin',
                'email'          => 'superadmin@solarvilla.co.in',
                'phone'          => '9999999990',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['SuperAdmin']);

        User::create([
                'name'           => 'Admin',
                'email'          => 'admin@solarvilla.co.in',
                'phone'          => '9999999991',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['Admin']);

        User::create([
                'name'           => 'BackOffice',
                'email'          => 'backoffice@solarvilla.co.in',
                'phone'          => '9999999992',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['BackOffice']);

        User::create([
                'name'           => 'TeamLeader',
                'email'          => 'teamleader@solarvilla.co.in',
                'phone'          => '9999999993',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['TeamLeader']);

        User::create([
                'name'           => 'Sales',
                'email'          => 'sales@solarvilla.co.in',
                'phone'          => '9999999994',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['Sales']);

        User::create([
                'name'           => 'Technician',
                'email'          => 'technician@solarvilla.co.in',
                'phone'          => '9999999995',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['Technician']);

        User::create([
                'name'           => 'Client',
                'email'          => 'client@solarvilla.co.in',
                'phone'          => '9999999996',
                'password'       => bcrypt('hjhskjhsu12@12022'),
                'remember_token' => null,
        ])->assignRole(['Client']);

    }
}
