<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([

            'id' => 1,
            'nickname' => 'HerBerk',
            'name' => 'Hermann Berkhoff Felis',
            'email' => 'hermann@berkhoff.cl',
            'password' => '$2y$10$0EBkxGZ6PiAylFRW0yN2Pui1BuT/ZJmnoMXrqk5Kpa9dFlxJvF/me',
            'points' => 14,
            'type' => 'admin',
            'active' => 1,
            'registration_token' => NULL,
            'remember_token' => 'Z4GOcqs0b8',
            'last_logged_at' => NULL,
            'deleted_at' => NULL,
            'created_at' => '2018-05-24 16:00:12',
            'updated_at' => '2018-05-24 16:08:15',
        ]);

        factory(User::class)->times(49)->create();
    }
}
