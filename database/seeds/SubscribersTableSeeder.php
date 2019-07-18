<?php

use Illuminate\Database\Seeder;
use App\Models\Subscriber;

class SubscribersTableSeeder extends Seeder
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
