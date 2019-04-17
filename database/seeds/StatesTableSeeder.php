<?php

use Illuminate\Database\Seeder;
use App\Models\State;
class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name'     => 'RONDÔNIA',
            'initials'    => 'RO',
        ]);

        State::create([
            'name'     => 'ACRE',
            'initials'    => 'AC',
        ]);

        State::create([
            'name'     => 'AMAZONAS',
            'initials'    => 'AM',
        ]);

        State::create([
            'name'     => 'SÃO PAULO',
            'initials'    => 'SP',
        ]);
    }
}
