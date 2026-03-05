<?php

namespace Database\Seeders;

use App\Models\User;
use App\UserStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory([
            'name' => 'Harithya Wisesa',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => UserStatus::ACTIVE->value,
            'is_admin' => true,
            'phone' => '08123456789',
        ])->create();
        User::factory()->count(10)->create();
    }
}
