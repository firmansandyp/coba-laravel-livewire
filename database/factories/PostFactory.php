<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userCount = User::all()->count();
        return [
            'title' => $this->faker->sentences(3, true),
            'content' => $this->faker->paragraphs(3, true),
            'likes' => 0,
            'id_user' => $this->faker->numberBetween(1, $userCount),
        ];
    }
}
