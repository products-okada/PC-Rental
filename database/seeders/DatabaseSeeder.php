<?php

namespace Database\Seeders;

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
        // $this->call(MobilePcSeeder::class);
        $this->call(RentalLogSeeder::class);
    }
}




