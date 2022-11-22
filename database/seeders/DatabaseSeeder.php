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
        Creation::factory(5)->create();
        User::factory(5)->create();
        User::create([
            'name' => 'admin',
            'nisn' => '11223344',
            'email' => 'admin@gmail.com',
            'status' => '4',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            
        ]);
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
            'name' => 'Desktop'
        ]);
    }
}