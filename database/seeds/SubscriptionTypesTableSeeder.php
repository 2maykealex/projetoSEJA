<?php

use Illuminate\Database\Seeder;
use App\Models\SubscriptionType;

class SubscriptionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubscriptionType::create([
            'name'     => 'Básico',
        ]);

        SubscriptionType::create([
            'name'     => 'Intermediário',
        ]);

        SubscriptionType::create([
            'name'     => 'Avançado',
        ]);
    }
}
