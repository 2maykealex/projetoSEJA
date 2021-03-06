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
        $this->call(CollectionsTableSeeder::class);
        $this->call(SubscriptionTypesTableSeeder::class);
        $this->call(SubscriptionPlansTableSeeder::class);
        $this->call(CongressTypesTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SubscriptionRegistriesTableSeeder::class);
        $this->call(PostTypesTableSeeder::class);
        $this->call(ReportTypesTableSeeder::class);
        $this->call(PublisherReportsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
