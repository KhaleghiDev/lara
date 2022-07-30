<?php

namespace Database\Factories\api\v1;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFaktoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'post'=>$this->faker->paragraph(5),
            'img'=>$this->faker->imageUrl(640,480),
            'status'=>rand(0,2),
            'like'=>rand(0,20),
            'readText'=>rand(0,25),
            'user_id'=>rand(0,10),
            'category_id'=>rand(0,5),
        ];
    }
}
