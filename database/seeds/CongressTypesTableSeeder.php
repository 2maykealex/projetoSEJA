<?php

use Illuminate\Database\Seeder;
use App\Models\CongressType;

class CongressTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CongressType::create([
            'name'     => 'Astrologia',
        ]);
    }
}
