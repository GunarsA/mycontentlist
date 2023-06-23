<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Content::create([
            'title' => 'The Matrix',
            'episode_cnt' => 1,
            'length' => 136,
            'year' => 1999,
        ]);
        Content::create([
            'title' => 'The Matrix Reloaded',
            'episode_cnt' => 1,
            'length' => 138,
            'year' => 2003,
        ]);
        Content::create([
            'title' => 'The Matrix Revolutions',
            'episode_cnt' => 1,
            'length' => 129,
            'year' => 2003,
        ]);
        Content::create([
            'title' => 'The Office',
            'episode_cnt' => 201,
            'length' => 22,
            'year' => 2005,
        ]);

        User::create([
            'name' => 'gunarsab',
            'email' => 'test@email.com',
            'password' => bcrypt('password'),
        ]);

    }
}
