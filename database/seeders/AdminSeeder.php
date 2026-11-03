<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Admin User', 'email' => 'admin@gmail.com', 'password' => Hash::make('adminadmin'), 'role' => 'admin'],
            ['name' => 'User 1', 'email' => 'user1@gmail.com', 'password' => Hash::make('user1user1'), 'role' => 'user'],
        ];

        User::factory()->createMany($users);
    }
}
