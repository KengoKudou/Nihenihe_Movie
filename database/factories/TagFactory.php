<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    public function definition()
    {
        return [
            'tag' => $this->faker->unique()->word(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ];
    }
}
