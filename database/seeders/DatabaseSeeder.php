<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            $this->call(UsersTableSeeder::class);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
