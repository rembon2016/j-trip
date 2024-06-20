<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\HomeSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\User\UserSeeder;
use Database\Seeders\Content\SettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            HomeSeeder::class,
            AboutSeeder::class
        ]);
    }
}
