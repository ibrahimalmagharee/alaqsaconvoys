<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = new User;
//        $user->full_name = 'احمد سالم';
//        $user->national_Id = 1313535;
//        $user->telephone_number = 25356987;
//        $user->region_id = 1;
//        $user->town_id = 1;
//        $user->email = 'ahmed@gmail.com';
//        $user->user_name = 'ahmedsalem22';
//        $user->password = bcrypt('ahmed123456');
//        $user->save();
//        $user->attachRole('administrator');

//        $user = new User;
//        $user->full_name = 'saeed ali';
//        $user->national_Id = 262626;
//        $user->telephone_number = 26262656;
//        $user->region_id = 2;
//        $user->town_id = 3;
//        $user->email = 'saeedali@gmail.com';
//        $user->user_name = 'saeed_ali';
//        $user->password = bcrypt('saeedali123');
//
//        $user->save();
//        $user->attachRole('brigade');

//        $user = new User;
//        $user->full_name = 'malik saad';
//        $user->national_Id = 565666;
//        $user->telephone_number = 25558455;
//        $user->region_id = 3;
//        $user->town_id = 4;
//        $user->email = 'maliksaad@gmail.com';
//        $user->user_name = 'malik_saad';
//        $user->password = bcrypt('maliksaad123');
//
//        $user->save();
//        $user->attachRole('delegate');

//        $user = new User;
//        $user->full_name = 'ali';
//        $user->national_Id = 956622;
//        $user->telephone_number = 456265625;
//        $user->region_id = 4;
//        $user->town_id = 5;
//        $user->email = 'ali@gmail.com';
//        $user->user_name = 'ali';
//        $user->password = bcrypt('ali123456');
//
//        $user->save();
//        $user->attachRole('user');

        $user = new User;
        $user->full_name = 'mohammed';
        $user->national_Id = 8521475;
        $user->telephone_number = 32568415;
        $user->region_id = 5;
        $user->town_id = 6;
        $user->email = 'mohammed@gmail.com';
        $user->user_name = 'mohammed';
        $user->password = bcrypt('mohammed123456');

        $user->save();
        $user->attachRole('central');

    }
}
