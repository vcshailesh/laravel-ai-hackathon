<?php

namespace Database\Seeders;

use Exception;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            User::create([
                'name' => 'Laravel AI',
                'email' => 'laravel@ai.com',
                'password' => bcrypt('Laravel@ai')
            ]);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
        }
    }
}
