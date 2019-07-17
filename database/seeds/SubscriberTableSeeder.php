<?php

use Illuminate\Database\Seeder;
use App\Models\Subscriber;

class SubscriberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriber::create([
            'person_id' => 3,
        ]);
    }
}
