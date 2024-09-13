<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'Indonesia']);
        Country::create(['name' => 'Malaysia']);
        City::create(['country_id' => 1, 'name' => 'Samarinda']);
        City::create(['country_id' => 1, 'name' => 'Jakarta']);
        City::create(['country_id' => 1, 'name' => 'Balikpapan']);
        City::create(['country_id' => 2, 'name' => 'Kuala-Lumpur']);
        City::create(['country_id' => 2, 'name' => 'Johor']);
        City::create(['country_id' => 2, 'name' => 'Sabah']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);
    }
}
