<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'subscription_type_id'=> 1,
            'publisher_id'=> 1,
            'title'     => 'Uma linda Mulher',
            'summary' => 'Durante uma viagem de negócios a Los Angeles, Edward...',
            'text' => 'Sempre haverá aqueles filmes que, sempre que você assistir, você vai sentir uma sensação estranhamente mágica...',
            'image' => 'post_0001.jpg',
        ]);

        Post::create([
            'subscription_type_id'=> 2,
            'publisher_id'=> 1,
            'title'     => 'Os Vingadores - O Ultimato',
            'summary' => 'Após Thanos eliminar metade das criaturas vivas...',
            'text' => 'Mais do que qualquer filme precedente do Universo Cinematográfico Marvel...',
            'image' => 'post_0002.jpg',

        ]);
    }
}
