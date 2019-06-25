<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'event_type_id'=> 1,
            'person_id'=> 1,
            'title'     => 'Cometa Halley',
            'summary' => 'Veja esse espetáculo',
            'text' => 'Em rota de colisão...',
            'image' => 'post_0001.jpg',
            'event_date' => "2019-07-01",
        ]);    }
}
