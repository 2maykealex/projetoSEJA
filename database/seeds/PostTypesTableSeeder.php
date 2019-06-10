<?php

use Illuminate\Database\Seeder;
use App\Models\PostType;

class PostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            'name' => 'congresses',
            'name_singular' => 'congress',
        ]);

        PostType::create([
            'name' => 'courses',
            'name_singular' => 'course',
        ]);

        PostType::create([
            'name' => 'events',
            'name_singular' => 'event',
        ]);

        PostType::create([
            'name' => 'posts',
            'name_singular' => 'post',
        ]);
    }
}
