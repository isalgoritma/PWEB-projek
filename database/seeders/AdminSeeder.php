<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // create admin only if not exists
        if (!User::where('email', 'admin@example.com')->exists()) {
            User::create([
                'username' => 'admin',
                'name' => 'Administrator',
                'phone_number' => '081234567890',
                'email' => 'admin@example.com',
                'password' => Hash::make('@Admin123'), // ganti kalau perlu
                'role' => 'admin'
            ]);
        }
    }
}
