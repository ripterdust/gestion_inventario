<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'mail' => $this->faker->email,
            'nit' => '1413235k',
            'birth' => '12-02-2000',
            'phone' => $this->faker->phoneNumber,
            'adress' => '51 avenida a 6-23 residencial naciones unidas 2, zona 10 de Villa Nueva'
        ];
    }
}
