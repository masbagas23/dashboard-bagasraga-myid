<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::insert([
            'id' => 2,
            'name' => 'demo',
            'email' => 'demo@example.com',
            'password' => '$2y$10$ZK/ZyrV/O98wrjkZh2yCxOnaUYAZJ4nUJJYAo6SJ10LjcJ7vDdKRi'
        ]);
    }
}
