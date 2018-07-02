<?php

use App\Userprofile;
use Illuminate\Database\Seeder;

class User_profilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Userprofile::class)->create([

       'id' => 1,
		'user_id' => 1,
		'feature' => NULL,
		'avatar' => 'avatars/1/avatar.jpg',
		'description' => 'Programador y contador',
		'created_at' => '2018-05-24 16:08:15',
		'updated_at' => '2018-05-24 16:08:15',
        ]);

//        factory(Userprofile::class)->times(50)->create();
    }
}
