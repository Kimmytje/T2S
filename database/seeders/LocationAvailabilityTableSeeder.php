<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationAvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_availability')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'for' => 'Dog'
        ]);
        DB::table('location_availability')->insert([
            'location' => 'Prinses Beatrixplein 16',
            'for' => 'Cat'
        ]);
    }
}
