<?php

namespace App\Models;

use Illuminate\Database\Seeder;

class UsersProfilesAccessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::create([
            'user_id'     => 1,
            'user_profile_id'     => 1,
        ]);

        UserProfile::create([
            'user_id'     => 2,
            'user_profile_id'     => 1,
        ]);

        UserProfile::create([
            'user_id'     => 3,
            'user_profile_id'     => 3,
        ]);

        UserProfile::create([
            'user_id'     => 4,
            'user_profile_id'     => 2,
        ]);
    }
}
