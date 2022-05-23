<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'buyers_id'=> mt_rand(1, 3),
            'date_order' => $this->faker->date(),
            'rent_start' => $this->faker->date(),
            'rent_finish' => $this->faker->date(),
            'rent_time'=> $this->faker->numberBetween(1,365),
            'price'=> $this->faker->numberBetween(100000,1000000),
        ];
    }
}
