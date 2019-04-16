<?php

namespace App\Models;

use Illuminate\Database\Seeder;

class ProfilesAccessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileAccess::create([
            'name'     => 'adm',
        ]);

        ProfileAccess::create([
            'name'     => 'subscriber',
        ]);

        ProfileAccess::create([
            'name'     => 'publisher',
        ]);


    }
}
