<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_name = $this->faker->firstName();
        $last_name = $this->faker->lastName();
        $phone_number = $this->faker->phoneNumber();
        $street = $this->faker->streetAddress();
        $city = $this->faker->city();

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number' => $phone_number,
            'street' => $street,
            'city' => $city
        ];
    }
}
