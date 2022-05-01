<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_animals_array = ["Dog", "Cat", "Fish", "Bird", "Reptile", "Rabbit", "Hamster", "Guinea Pig"];

        foreach($kind_of_animals_array as $kind){
            DB::table('kind_of_animals')->insert([
                'kind' => $kind
            ]);
        }
    }
}
