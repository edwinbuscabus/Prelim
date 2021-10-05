<?php

namespace Database\Factories;

use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

class serviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fast Delivery' => $this->faker->word,
        'Super Taste' => $this->faker->word,
        'Contact Us' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
