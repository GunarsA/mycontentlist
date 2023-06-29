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
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 178,
                'year' => 2001,
            ],
            [
                'title' => 'The Lord of the Rings: The Two Towers',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 179,
                'year' => 2002,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 201,
                'year' => 2003,
            ],
            [
                'title' => 'Breaking Bad',
                'content_type_id' => 2,
                'episode_cnt' => 62,
                'length' => 49,
                'year' => 2008,
            ],
            [
                'title' => 'Game of Thrones',
                'content_type_id' => 2,
                'episode_cnt' => 73,
                'length' => 57,
                'year' => 2011,
            ],
            [
                'title' => 'Friends',
                'content_type_id' => 2,
                'episode_cnt' => 236,
                'length' => 22,
                'year' => 1994,
            ],
            [
                'title' => 'Inception',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 148,
                'year' => 2010,
            ],
            [
                'title' => 'The Dark Knight',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 152,
                'year' => 2008,
            ],
            [
                'title' => 'The Shawshank Redemption',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 142,
                'year' => 1994,
            ],
            [
                'title' => 'Stranger Things',
                'content_type_id' => 2,
                'episode_cnt' => 34,
                'length' => 51,
                'year' => 2016,
            ],
            [
                'title' => 'The Avengers',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 143,
                'year' => 2012,
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 152,
                'year' => 2001,
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 161,
                'year' => 2002,
            ],
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 142,
                'year' => 2004,
            ],
            [
                'title' => 'Harry Potter and the Goblet of Fire',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 157,
                'year' => 2005,
            ],
            [
                'title' => 'Harry Potter and the Order of the Phoenix',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 138,
                'year' => 2007,
            ],
            [
                'title' => 'Harry Potter and the Half-Blood Prince',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 153,
                'year' => 2009,
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows - Part 1',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 146,
                'year' => 2010,
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows - Part 2',
                'content_type_id' => 1,
                'episode_cnt' => 1,
                'length' => 130,
                'year' => 2011,
            ],
            [
                'title' => 'The Big Bang Theory',
                'content_type_id' => 2,
                'episode_cnt' => 279,
                'length' => 22,
                'year' => 2007,
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
            [
                'name' => 'Peter Jackson',
            ],
            [
                'name' => 'Bryan Cranston',
            ],
            [
                'name' => 'David Benioff',
            ],
            [
                'name' => 'D.B. Weiss',
            ],
            [
                'name' => 'Jennifer Aniston',
            ],
            [
                'name' => 'Lisa Kudrow',
            ],
            [
                'name' => 'Matt LeBlanc',
            ],
            [
                'name' => 'Christopher Nolan',
            ],
            [
                'name' => 'Christian Bale',
            ],
            [
                'name' => 'Tim Robbins',
            ],
            [
                'name' => 'Millie Bobby Brown',
            ],
            [
                'name' => 'Robert Downey Jr.',
            ],
            [
                'name' => 'Daniel Radcliffe',
            ],
            [
                'name' => 'Rupert Grint',
            ],
            [
                'name' => 'Emma Watson',
            ],
            [
                'name' => 'Jim Parsons',
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
            [
                'name' => 'Trinity',
            ],
            [
                'name' => 'Agent Smith',
            ],
            [
                'name' => 'Gandalf',
            ],
            [
                'name' => 'Walter White',
            ],
            [
                'name' => 'Tyrion Lannister',
            ],
            [
                'name' => 'Chandler Bing',
            ],
            [
                'name' => 'Ross Geller',
            ],
            [
                'name' => 'Bruce Wayne',
            ],
            [
                'name' => 'Andy Dufresne',
            ],
            [
                'name' => 'Mike Wheeler',
            ],
            [
                'name' => 'Tony Stark',
            ],
            [
                'name' => 'Harry Potter',
            ],
            [
                'name' => 'Ron Weasley',
            ],
            [
                'name' => 'Hermione Granger',
            ],
            [
                'name' => 'Sheldon Cooper',
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

        DB::table('studios')->insert([
            [
                'name' => 'Warner Bros.',
            ],
            [
                'name' => 'Village Roadshow Pictures',
            ],
            [
                'name' => 'New Line Cinema',
            ],
            [
                'name' => 'Lionsgate',
            ],
            [
                'name' => 'HBO',
            ],
            [
                'name' => 'Paramount Pictures',
            ],
            [
                'name' => 'Legendary Pictures',
            ],
            [
                'name' => 'DC Comics',
            ],
            [
                'name' => 'Marvel Studios',
            ],
        ]);

        DB::table('content_studios')->insert([
            [
                'content_id' => 1,
                'studio_id' => 1,
            ],
            [
                'content_id' => 1,
                'studio_id' => 2,
            ],
        ]);

        DB::table('ratings')->insert([
            [
                'content_id' => 1,
                'user_id' => 1,
                'rating' => '7',
                'is_favorite' => 1,
                'date_started' => '2019-01-01',
                'date_finished' => '2019-01-01',
                'review' => 'This is a review',
            ],
            [
                'content_id' => 1,
                'user_id' => 2,
                'rating' => '8',
                'is_favorite' => 1,
                'date_started' => '2019-01-01',
                'date_finished' => '2019-01-01',
                'review' => 'This is a review',
            ],
            [
                'content_id' => 7,
                'user_id' => 2,
                'rating' => '9',
                'is_favorite' => 0,
                'date_started' => '2022-01-01',
                'date_finished' => '2022-01-01',
                'review' => 'Guud',
            ],
        ]);

        $content = Content::find(1);
        $content->genres()->attach([1, 2]);
    }
}
