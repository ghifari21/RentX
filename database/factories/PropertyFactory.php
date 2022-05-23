<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
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
            'seller_id' => mt_rand(1, 3),
            'title'=> $this->faker->word(mt_rand(2, 8)),
            'slug'=> $this->faker->slug(),
            'property_type'=> "Kosan",
            'address'=>$this->faker->sentence(mt_rand(5, 8)),
            'link_location'=>$this->faker->sentence(mt_rand(3, 5)),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'photo_1'=> "https://source.unsplash.com/300x300?house",
            'photo_2'=> "https://source.unsplash.com/300x300?house",
            'photo_3'=> "https://source.unsplash.com/300x300?house",
            'photo_4'=> "https://source.unsplash.com/300x300?house",
            'photo_5'=> "https://source.unsplash.com/300x300?house",
            'description'=> collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p</p>")->implode(''),
        ];
    }
}
