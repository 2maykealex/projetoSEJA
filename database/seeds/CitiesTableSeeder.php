<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'     => 'PORTO VELHO',
            'state_id' => 1,
        ]);

        City::create([
            'name'     => 'CACOAL',
            'state_id' => 1,
        ]);

        City::create([
            'name'     => 'RIO BRANCO',
            'state_id' => 2,
        ]);

        City::create([
            'name'     => 'MANAUS',
            'state_id' => 3,
        ]);

        City::create([
            'name'     => 'SÃO PAULO',
            'state_id' => 4,
        ]);

        City::create([
            'name'     => 'DIADEMA',
            'state_id' => 4,
        ]);
    }
}
