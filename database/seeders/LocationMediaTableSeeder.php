<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_media')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'media' => '/media/672_720x480.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'media' => '/media/673_360x240.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'media' => '/media/375_360x240.jpg'
        ]);
        DB::table('location_media')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'media' => '/media/676_360x240.jpg'
        ]);
    }
}
