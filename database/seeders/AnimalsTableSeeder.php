<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            "name" => "Henry",
            "age" => 5,
            "kind" => "Dog",
            "owner" => 1,
            "note" => "Moet medicijnen innemen met avond eten (rond 18.30 - 19.30)"
        ]);
    }
}
