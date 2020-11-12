<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4);
        return [
            'user_id'=> rand(1,10),
            'category_id'=> rand(1,20),
            'country_id'=> rand(1,200),
            'name' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->text(200),
            'body' => $this->faker->text(400),
            'file' => $this->faker->imageUrl($width = 640, $height = 480),
            'status' => $this->faker->randomElement(['DRAFT', 'PUBLISHED']),
        ];
    }
}
