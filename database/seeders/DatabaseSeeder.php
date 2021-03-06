<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            KindOfAnimalsTableSeeder::class,
            AnimalsTableSeeder::class,
            LocationTableSeeder::class,
            LocationMediaTableSeeder::class,
            AnimalsMediaTableSeeder::class,
            LocationAvailabilityTableSeeder::class,
            SearchingTableSeeder::class,
            ReviewsTableSeeder::class,
        ]);
    }
}
