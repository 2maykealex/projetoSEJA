<?php

use Illuminate\Database\Seeder;
use App\Models\ReportType;

class ReportTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReportType::create([
            'name' => 'Astrologia',
            'summary' => 'Sobre Astrologia',
            'icon' => '',
        ]);

        ReportType::create([
            'name' => 'Cosmologia',
            'summary' => 'Sobre Cosmologia',
            'icon' => '',
        ]);
    }
}
