<?php

use Illuminate\Database\Seeder;
use App\Models\SubscriptionRegistry;

class SubscriptionRegistriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubscriptionRegistry::create([
            'person_id' => 3,
            'subscription_plan_id' => 1,
            'status' => 1,
            'expires_in' => '',
        ]);
    }
}
