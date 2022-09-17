<?php

namespace Database\Seeders;

use App\models\user;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create users
        \App\Models\User::factory(10)->create();
    }
}

