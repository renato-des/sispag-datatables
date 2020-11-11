<?php

namespace Database\Factories;

use App\Models\employees;
use Illuminate\Database\Eloquent\Factories\Factory;

class employeesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employees::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
