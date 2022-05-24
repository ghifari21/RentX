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
            'slug'=> $this->faker->unique()->slug(),
            'property_type'=> "Kosan",
            'address'=>$this->faker->sentence(mt_rand(5, 8)),
            'rent_for' => "Campur",
            'total_room' => mt_rand(1, 5),
            'available_room' => mt_rand(1, 5),
            'room_width' => mt_rand(3, 5),
            'room_length' => mt_rand(3, 5),
            'link_location'=> "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.982658340905!2d107.5943499!3d-6.8611339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee36226510a79e76!2sUniversitas%20Pendidikan%20Indonesia!5e0!3m2!1sen!2sid!4v1653257032700!5m2!1sen!2sid",
            'province' => 'Jawa Barat',
            'city' => 'Bandung',
            'district' => 'Dago',
            'rating' => 5.0,
            'total_reviewer' => 5,
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
