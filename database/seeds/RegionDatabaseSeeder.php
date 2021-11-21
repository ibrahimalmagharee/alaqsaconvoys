<?php

use Illuminate\Database\Seeder;

class RegionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'name' => 'كفر كنا',
            ],
            [
                'name' => 'العيزرية',
            ],
            [
                'name' => 'بيرزيت',
            ],
            [
                'name' => "نعلين",
            ]
            ,
            [
                'name' => "طولكرم",
            ]
            ,
            [
                'name' => "بيت لحم",
            ]
            ,
            [
                'name' => "نعلين",
            ]
        ];

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }
    }
}
