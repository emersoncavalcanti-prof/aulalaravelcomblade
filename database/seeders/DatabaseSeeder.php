<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //digite no terminal: php artisan db:seed
        User::factory()->create([
            'name' => 'Emerson Cavalcanti',
            'email' => 'emerson@ete.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
