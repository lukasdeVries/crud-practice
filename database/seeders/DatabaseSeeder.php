<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Universe;
use App\Models\Author;
use App\Models\Character;
use App\Models\Country;
use App\Models\Book;

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

        Universe::create([
            'name' => 'First Law'
        ]);

        Universe::create([
            'name' => 'Cosmere'
        ]);

        Author::create([
            'name' => 'Joe Abercrombie',
            'date_of_birth' => '1974-12-31',
            'is_alive' => true,
            'nationality' => 'American'
        ]);

        $logen = Character::create([
            'name' => 'Logen',
            'description' => 'Logen ninefinger is a feared warrior from the cold north',
            'country_id' => 1,
        ]);

        $logensBooks = [1,2];
        $logen->books()->attach($logensBooks);

        Book::create([
            'title' => 'Before they are hanged',
            'universe_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Last argument of kings',
            'universe_id' => 1,
            'author_id' => 1
        ]);

        Country::create([
            'name' => 'The North',
            'universe_id' => 1,
        ]);
    }
}
