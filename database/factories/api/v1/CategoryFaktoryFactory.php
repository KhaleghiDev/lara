<?php

namespace Database\Factories\api\v1;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFaktoryFactory extends Factory
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
            'icon'=> $this->faker->userName(),
            'status'=>rand(0,2),
        ];
    }
}
