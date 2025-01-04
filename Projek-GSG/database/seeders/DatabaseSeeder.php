<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;
use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('admin12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'type' => 1,
            ],
            [
                'id' => 2,
                'name' => 'zizi',
                'email' => 'zizi@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('zizi12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'type' => 0,
            ],
            [
                'id' => 3,
                'name' => 'keuangan',
                'email' => 'keuangan@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('keuangan12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'type' => 2,
            ],
        ]);
    }
}