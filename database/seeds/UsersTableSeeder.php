<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name'     => 'mateus',
            'email'    => 'mateusalisson15@gmail.com',
            'password' => bcrypt('654321'),
        ]);

        User::create([
            'name'     => 'publisher',
            'email'    => 'publisher@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name'     => 'assinante 1',
            'email'    => 'assinante@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
