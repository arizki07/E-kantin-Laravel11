<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'administrator',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('Admin.123'),
                'role' => 'Admin',
            ],
        ];

        foreach ($users as $us) {
            User::create($us);
        }
    }
}
