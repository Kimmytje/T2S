<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalsMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals_media')->insert([
            'animal' => '1',
            'media' => '/media/Animals/ZL1OcsU4_400x400.jpg'
        ]);
        DB::table('animals_media')->insert([
            'animal' => '2'
        ]);
        DB::table('animals_media')->insert([
            'animal' => '3'
        ]);
    }
}
