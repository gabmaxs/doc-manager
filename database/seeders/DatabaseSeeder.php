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
        $this->call([
            VersionSeeder::class,
            SectionSeeder::class,
            PageSeeder::class,
            CategorySeeder::class
        ]);
    }
}
