<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\City;
use App\Models\Country;
use App\Models\Publisher;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

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

        // User::factory(5)->has(
        //     UserProfile::factory(1)->count(1)
        // )->create();

        // Seed countries first
        // Country::factory(5)->create();

        // Seed users with profiles
        // User::factory(5)->hasUserProfile(1)
        // ->create();

        // Author::factory(4)->has(
        //     Book::factory(1)->has(
        //         Publisher::factory(1)->count(1)
        //     )
        // )->create();

        // Country::factory(5)->has(
        //     State::factory(2)->has(
        //         City::factory(3)->count(3)
        //     )
        // )->create();

        // User::factory(5)->create();
        Role::factory(5)->create();
    }
}
