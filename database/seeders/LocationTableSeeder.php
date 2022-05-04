<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            'address' => 'Prinses Beatrixplein 16',
            'city' => 'Haarlem',
            'owner' => 1,
        ]);
    }
}
