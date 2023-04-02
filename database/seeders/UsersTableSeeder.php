<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Business;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('asdasd'),
            'type'      => User::TYPES['admin'],
        ]);

        User::create([
            'name'      => 'User',
            'type'      => User::TYPES['user'],
            'email'     => 'user@user',
            'password'  => bcrypt('asdasd'),
        ]);

        for ($i = 0; $i < 3; $i++) {
            $user = User::factory()->create([
                'type'  => User::TYPES['business'],
            ]);
            Business::factory()->create([
                'user_id'       => $user->id,
            ]);
        }

        $business = User::create([
            'name'      => 'Business',
            'type'      => User::TYPES['business'],
            'email'     => 'business@business',
            'password'  => bcrypt('asdasd'),
        ]);

        Business::factory()->create([
            'user_id'       => $business->id,
        ]);
    }
}
