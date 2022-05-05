<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
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

            'title' => $this->faker->sentence,
            'content' => $this->faker->text,
            'category_id' => $this->faker->randomElement(Category::all())['id'],
            'post_image' => $this->faker->imageUrl(640, 480, 'animals', true)

        ];
    }
}
