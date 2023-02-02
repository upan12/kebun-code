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
            'no_hp' => '08511223344',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'github' => 'github',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet dolor nulla nobis sint sapiente consectetur natus magnam temporibus. Veritatis, vel. Exercitationem cumque tempore commodi quam. Voluptas repellendus minima tempore libero earum mollitia doloribus necessitatibus expedita nobis consectetur maxime deleniti quam dolorum, quas placeat! Iste accusantium, itaque totam quos consectetur harum optio possimus cupiditate aliquam dicta modi impedit obcaecati corrupti delectus, sint, quae ipsum? Tempore beatae architecto, voluptate asperiores recusandae atque mollitia provident, consectetur maxime ab nulla quas at, maiores veniam cum necessitatibus. Perspiciatis culpa sint quos quia voluptates tempore alias natus quibusdam delectus. Id repellendus reiciendis ipsa enim optio. Minus!',
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