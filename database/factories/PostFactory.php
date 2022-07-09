<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->paragraphs(3, true),
            'published' => true,
        ];
    }

    public function draft()
    {
        return $this->state(function (array $attributes) {
            return [
                'published' => false,
            ];
        });
    }
}
