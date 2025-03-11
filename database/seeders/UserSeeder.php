<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Author',
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('author'),
            'is_admin' => false,
        ]);
    }
}
