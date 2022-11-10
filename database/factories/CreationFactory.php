<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creation>
 */
class CreationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'name' => $this->faker->sentence(mt_rand(1, 2)),
            'technology' => $this->faker->sentence(mt_rand(2, 3)),
            'description' => $this->faker->sentence(mt_rand(2,5)),
            'category' => ('Website'),
            'status' => '1',
            'remember_token' => Str::random(10),
        ];
    }
}