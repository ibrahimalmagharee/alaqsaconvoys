<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $brigades = User::hasRole('user')->get();
    }

    public function create ()
    {

    }

    public function store (UserRequest $request)
    {
        $brigade = User::create([
            'full_name' => 'saeed ali',
            'national_Id' => 262626,
            'telephone_number' => 26262656,
            'region_id' => 2,
            'town_id' => 3,
            'email' => 'saeedali@gmail.com',
            'user_name' => 'saeed_ali',
            'password' => bcrypt('saeedali123'),
        ]);

        $brigade->save();
        $brigade->attachRole('user');

        return 'success';
    }
}
