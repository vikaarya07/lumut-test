<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        // Post::factory(15)->recycle([
        //     User::all()
        // ])->create();

        Account::factory(1)->create();
    }
}
