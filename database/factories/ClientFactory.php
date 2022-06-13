<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(Faker $faker)
    {
        return [
            'name' => $faker->name,
            'mail' => $faker->unique()->safeEmail,
            'nit' => '1413235k',
            'birth' => '12-02-2000',
            'phone' => '124134134',
            'adress' => '51 avenida a 6-23 residencial naciones unidas 2, zona 10 de Villa Nueva'
        ];
    }
}
