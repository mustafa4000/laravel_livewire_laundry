<?php

namespace Database\Seeders;

use App\Models\Karyawan;
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

        // 4
        $this->call([
            RoleSeeder::class,
            LayananSeeder::class,
            TransaksiSeeder::class,
        ]);
    }
}
