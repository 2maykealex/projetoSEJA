<?php

use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubscriptionPlan::create([  //básico-mensal
            'subscription_type_id' => 1,
            'collection_id' => 1,
            'price' => 10.0,
        ]);

        SubscriptionPlan::create([  //básico-trimestral
            'subscription_type_id' => 1,
            'collection_id' => 2,
            'price' => 18.0,
        ]);

        SubscriptionPlan::create([  //básico-semestral
            'subscription_type_id' => 1,
            'collection_id' => 3,
            'price' => 26.0,
        ]);

        SubscriptionPlan::create([  //básico-anual
            'subscription_type_id' => 1,
            'collection_id' => 4,
            'price' => 45.0,
        ]);

        SubscriptionPlan::create([ //intermediario-mensal
            'subscription_type_id' => 2,
            'collection_id' => 1, 
            'price' => 13.0,
        ]);

        SubscriptionPlan::create([ //avançado-mensal
            'subscription_type_id' => 3,
            'collection_id' => 1,
            'price' => 15.0,
        ]);
    }
}
