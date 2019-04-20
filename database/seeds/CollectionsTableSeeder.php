<?php

use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'name'     => 'Mensal',
        ]);

        Collection::create([
            'name'     => 'Trimestral',
        ]);

        Collection::create([
            'name'     => 'Semestral',
        ]);

        Collection::create([
            'name'     => 'Anual',
        ]);
    }
}
