<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'user1',
            'firstname' => 'Raitis',
            'lastname' => 'Baitis',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'username' => 'user2',
            'firstname' => 'Bob',
            'lastname' => 'Rob',
            'password' => Hash::make('password'),
        ]);
    }
}
