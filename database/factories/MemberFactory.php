<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'nickname' => $this->faker->firstName(),
            'email'     => $this->faker->safeEmail(),
            'phone'     => $this->faker->phoneNumber(),
            'birth_date'=> $this->faker->date(),
            'gender'    => $this->faker->randomElement(['M', 'F']),
            'comments'  => $this->faker->text(),
            'enabled'   => $this->faker->randomElement([1, 0])
        ];
    }
}
