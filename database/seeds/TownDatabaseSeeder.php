<?php

use Illuminate\Database\Seeder;

class TownDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $towns = [
            [
                'name' => 'الطيبة',
                'region_id' => 1,
            ],
            [
                'name' => 'يطا',
                'region_id' => 7,
            ],
            [
                'name' => 'بيتا',
                'region_id' => 2,
            ],
            [
                'name' => 'سلواد',
                'region_id' => 3,
            ],
            [
                'name' => 'شعفاط',
                'region_id' => 4,
            ],
            [
                'name' => 'الطيرة',
                'region_id' => 5,
            ],
            [
                'name' => 'رام الله',
                'region_id' => 6,
            ],

        ];

        foreach ($towns as $town) {
            \App\Models\Town::create($town);
        }
    }
}
