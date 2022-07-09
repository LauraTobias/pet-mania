<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'  => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin'),
            'isAdmin'  => 1,
         ]);
    }
}