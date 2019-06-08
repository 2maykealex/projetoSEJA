<?php

use Illuminate\Database\Seeder;
use App\Models\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'user_id' => 3,
            'name' => 'publisher',
            'cpf' => '22222222222',
            'telephone' => '6999246',
            'zipcode' => '76804',
            'address' => 'rua jaci paraná',
            'city_id' => 1,
            'image' => '001.jpeg',
        ]);

        Person::create([
            'user_id' => 1,
            'name' => 'ADM',
            'cpf' => '22222222223',
            'telephone' => '6999249',
            'zipcode' => '76804',
            'address' => 'rua jaci paraná',
            'city_id' => 1,
            'image' => '001.jpeg',
        ]);
    }
}
