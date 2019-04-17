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
            'name'     => 'RIO BRANCO',
            'state_id' => 2,
        ]);

        City::create([
            'name'     => 'AMAZONAS',
            'state_id' => 3,
        ]);

        City::create([
            'name'     => 'SÃO PAULO',
            'state_id' => 4,
        ]);
    }
}
