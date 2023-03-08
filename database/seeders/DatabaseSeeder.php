<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleUserSeeder;

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
            RoleUserSeeder::class,
            UserSeeder::class,
            // PegawaiSeeder::class,
            RoleSeeder::class,
            // AgamaSeeder::class,
            // NegaraSeeder::class,
            // GolonganDarahSeeder::class,
            // KeluargaSeeder::class,
        ]);

    }
}
