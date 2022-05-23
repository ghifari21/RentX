<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Review;
use App\Models\Order;
use App\Models\Property;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Joni',
            'username' => 'jonikul',
            'email' => 'joni@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::factory()->create([
            'name' => 'Chad',
            'username' => 'chadsm',
            'email' => 'chad@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::factory()->create([
            'name' => 'Giga',
            'username' => 'gigansm',
            'email' => 'giga@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Buyer::factory()->create([
            'user_id' => 1,
            'nik' => '20090841',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
            'phone' => '08412461247'
        ]);
        Buyer::factory()->create([
            'user_id' => 2,
            'nik' => '2009041241241',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
            'phone' => '084124622427'
        ]);
        Buyer::factory()->create([
            'user_id' => 3,
            'nik' => '20021841',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
            'phone' => '08153461247'
        ]);

        User::factory()->create([
            'name' => 'Sins',
            'username' => 'sinsful',
            'email' => 'sins@gmail.com',
            'password' => Hash::make('password'),
            'account_type' => 'seller'
        ]);
        User::factory()->create([
            'name' => 'Eimi',
            'username' => 'eimin',
            'email' => 'eimi@gmail.com',
            'password' => Hash::make('password'),
            'account_type' => 'seller'
        ]);
        User::factory()->create([
            'name' => 'Fukada',
            'username' => 'fukadan',
            'email' => 'fukada@gmail.com',
            'password' => Hash::make('password'),
            'account_type' => 'seller'
        ]);

        Seller::factory()->create([
            'user_id' => 4,
            'nik' => '1287461241246',
            'phone' => '082564167241',
            'address' => 'jl eka jumpa',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
        ]);
        Seller::factory()->create([
            'user_id' => 5,
            'nik' => '128746121417266',
            'phone' => '0825644124241',
            'address' => 'jl eka ss',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
        ]);
        Seller::factory()->create([
            'user_id' => 6,
            'nik' => '127458612784618',
            'phone' => '0825644214178',
            'address' => 'jl eka kk',
            'photo_profile' => "https://source.unsplash.com/300x300?person",
        ]);

        Property::factory(25)->create();

        // Order::factory(20)->create();

        // Review::factory(20)->create();
    }

}
