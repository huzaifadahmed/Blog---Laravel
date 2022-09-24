<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $guarded =[];

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id'=> Category::factory(),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(3),
            'body' => $this->faker->paragraph(6),
            'slug' => $this->faker->unique()->slug(),
        ];
    }
}
