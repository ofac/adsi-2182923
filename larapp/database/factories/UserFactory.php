<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname'          => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'phone'             => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'birthdate'         => $this->faker->date,
            'gender'            => $this->faker->randomElement($array = array('Female', 'Male')),
            'address'           => $this->faker->streetAddress,
            'role'              => 'Editor',
            'email_verified_at' => now(),
            'password'          => bcrypt('editor'), 
            'remember_token'    => Str::random(10),
        ];

        
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
