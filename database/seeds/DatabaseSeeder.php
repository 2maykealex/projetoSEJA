<?php

use Illuminate\Database\Seeder;
use App\Models\ProfilesAccessesTableSeeder;
use App\Models\UsersProfilesAccessesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesAccessesTableSeeder::class);
        $this->call(UsersProfilesAccessesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
