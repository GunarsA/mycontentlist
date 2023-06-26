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
            [
                'name' => 'admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
                'is_mod' => false,
            ],
            [
                'name' => 'mod',
                'email' => 'mod@email.com',
                'password' => bcrypt('password'),
                'is_admin' => false,
                'is_mod' => true,
            ],
            [
                'name' => 'gunarsab',
                'email' => 'gunarsab@email.com',
                'password' => bcrypt('password'),
                'is_admin' => false,
                'is_mod' => false,
            ],
        ]);

        DB::table('content_types')->insert([
            [
                'type' => 'Movie',
            ],
            [
                'type' => 'TV Show',
            ],
        ]);

        DB::table('contents')->insert([
            [
                'title' => 'The Matrix',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 136,
                'year' => 1999
            ],
            [
                'title' => 'The Matrix Reloaded',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 138,
                'year' => 2003
            ],
            [
                'title' => 'The Matrix Revolutions',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 129,
                'year' => 2003,
            ],
            [
                'title' => 'The Office',
                'content_type_id' => 2,
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

        DB::table('position_types')->insert([
            [
                'position' => 'Director',
            ],
            [
                'position' => 'Writer',
            ],
            [
                'position' => 'Producer',
            ],
            [
                'position' => 'Actor',
            ],
        ]);

        DB::table('positions')->insert([
            [
                'content_id' => 1,
                'staff_id' => 3,
                'position_type_id' => 1,
            ],
            [
                'content_id' => 1,
                'staff_id' => 4,
                'position_type_id' => 1,
            ],
            [
                'content_id' => 1,
                'staff_id' => 1,
                'position_type_id' => 4,
            ],
            [
                'content_id' => 1,
                'staff_id' => 2,
                'position_type_id' => 4,
            ],
        ]);

        DB::table('content_characters')->insert([
            [
                'content_id' => 1,
                'character_id' => 1,
            ],
            [
                'content_id' => 1,
                'character_id' => 2,
            ],
        ]);

        $content = Content::find(1);
        $content->genres()->attach([1, 2]);
    }
}
