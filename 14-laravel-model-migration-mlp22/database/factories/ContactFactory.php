<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Lupita Smith',
            'email' => 'lupita@gmail.com',

//            'name' => $this->faker->name(),
//            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
