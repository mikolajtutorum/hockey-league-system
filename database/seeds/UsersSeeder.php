<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'id' => 1,
                'name' => 'API User',
                'email' => null,
                'email_verified_at' => null,
                'password' => '$2y$10$T1Ow4JWm/8qrhn0R4KPsP.NlHVVAZkCWLmPXjXYjUETmRTrUJaHXO',
                'remember_token' => null,
                'avatar' => 'null.png',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
