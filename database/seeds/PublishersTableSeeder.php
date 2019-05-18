<?php

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'person_id' => 1,
        ]);
    }
}
