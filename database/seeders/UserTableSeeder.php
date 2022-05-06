<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "firstname" => "Melissa",
            "lastname" => "Parker",
            "username" => "smileymelly",
            "email" => "smileymelly@gmail.com",
            "password" => bcrypt("smileymelly"),
            'media' => 'media/Users/Melissa.jpg',
        ]);
        DB::table('users')->insert([
            "firstname" => "Randy",
            "lastname" => "Reid",
            "username" => "Randeid",
            "email" => "randeid@gmail.com",
            "password" => bcrypt("rr420"),
        ]);
    }
}
