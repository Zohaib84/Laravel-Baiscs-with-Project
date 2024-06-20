<?php

namespace Database\Seeders;

use App\Models\library;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        library::factory()->count(15)->create();
        // $this->call([
        //     StudentSeeder::class
        // ]);
    }
}
