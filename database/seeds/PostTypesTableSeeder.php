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
        ]);

        PostType::create([
            'name' => 'courses',
        ]);

        PostType::create([
            'name' => 'events',
        ]);

        PostType::create([
            'name' => 'posts',
        ]);
    }
}
