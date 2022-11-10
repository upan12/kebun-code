<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Creation;
use GuzzleHttp\Promise\Create;
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
        Creation::factory(10)->create();
        User::factory(5)->create();

        Category::create([
            'name' => 'Web Design'
        ]);

        Category::create([
            'name' => 'App Design'
        ]);

        Category::create([
            'name' => 'UI/UX'
        ]);

        Category::create([
            'name' => 'Dekstop'
        ]);
    }
}
