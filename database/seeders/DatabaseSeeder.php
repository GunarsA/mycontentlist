<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Content;
use App\Models\User;
use App\Models\Staff;
use App\Models\Role;
use App\Models\Genre;
use App\Models\Character;
use App\Models\ContentGenre;


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

        DB::table('users')->insert([
            'name' => 'gunarsab',
            'email' => 'test@email.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('contents')->insert([
            [
                'title' => 'The Matrix',
                'episode_cnt' => 1,
                'length' => 136,
                'year' => 1999
            ],
            [
                'title' => 'The Matrix Reloaded',
                'episode_cnt' => 1,
                'length' => 138,
                'year' => 2003
            ],
            [
                'title' => 'The Matrix Revolutions',
                'episode_cnt' => 1,
                'length' => 129,
                'year' => 2003,
            ],
            [
                'title' => 'The Office',
                'episode_cnt' => 201,
                'length' => 22,
                'year' => 2005,
            ],
        ]);

        DB::table('staff')->insert([
            [
                'name' => 'Keanu Reeves',
            ],
            [
                'name' => 'Laurence Fishburne',
            ],
            [
                'name' => 'Lana Wachowski',
            ],
            [
                'name' => 'Lilly Wachowski',
            ],
        ]);

        DB::table('genres')->insert([
            [
                'genre' => 'Action',
            ],
            [
                'genre' => 'Sci-Fi',
            ],
            [
                'genre' => 'Comedy',
            ],
        ]);

        DB::table('characters')->insert([
            [
                'name' => 'Neo',
            ],
            [
                'name' => 'Morpheus',
            ],
        ]);

        DB::table('roles')->insert([
            [
                'content_id' => 1,
                'staff_id' => 1,
                'role' => 'Actor',
                'character_id' => 1,
            ],
            [
                'content_id' => 1,
                'staff_id' => 2,
                'role' => 'Actor',
                'character_id' => 2,
            ],
            [
                'content_id' => 1,
                'staff_id' => 3,
                'role' => 'Director',
                'character_id' => null,
            ],
            [
                'content_id' => 1,
                'staff_id' => 4,
                'role' => 'Director',
                'character_id' => null,
            ],
        ]);

        $content = Content::find(1);
        $content->genres()->attach([1, 2]);
    }
}
