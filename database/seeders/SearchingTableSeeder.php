<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SearchingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('searching')->insert([
            'owner' => 1,
            'for' => 1,
            'from' => '2022-05-15 12:50:00',
            'to' => '2022-05-17 21:00:00',
            'payment' => 20.00
        ]);
    }
}
