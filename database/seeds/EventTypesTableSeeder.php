<?php

use Illuminate\Database\Seeder;
use App\Models\EventType;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventType::create([
            'name'     => 'Congresso',
        ]);

        EventType::create([
            'name'     => 'On-line',
        ]);

        EventType::create([
            'name'     => 'Normal',
        ]);
    }
}
