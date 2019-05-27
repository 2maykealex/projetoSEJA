<?php

use Illuminate\Database\Seeder;
use App\Models\PublisherReport;

class PublisherReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublisherReport::create([
            'report_type_id' => 1,
            'publisher_id' => 1,
        ]);
    }
}
