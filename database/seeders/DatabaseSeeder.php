<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // User::factory(10)->create();
        $this->call(UserSeeder::class);
    }
}
