<?php

namespace Database\Factories;

use App\Models\sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class saleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Super_Sale' => $this->faker->word,
        'Best_Sale' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
