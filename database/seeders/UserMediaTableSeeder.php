<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_media')->insert([
            'user' => '1',
            'media' => 'media/Users/Melissa.jpg'
        ]);
        DB::table('user_media')->insert([
            'user' => '2'
        ]);
    }
}
