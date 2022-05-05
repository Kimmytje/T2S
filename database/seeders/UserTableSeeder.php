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
            "fName" => "Melissa",
            "lName" => "Parker",
            "email" => "smileymelly@gmail.com",
            "password" => "smileymelly",
        ]);
        DB::table('users')->insert([
            "fName" => "Randy",
            "lName" => "Reid",
            "email" => "randeid@gmail.com",
            "password" => "rr420",
        ]);
    }
}
