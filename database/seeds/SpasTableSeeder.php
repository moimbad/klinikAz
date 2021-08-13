<?php

use App\Spa;
use Illuminate\Database\Seeder;

class SpasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spa::create([
            'name' => 'Saloon package 1',
            'slug' => 'Saloon package 1',
            'details' => 'Power 1.0',
            'price' => 40.00,
            'shipping_cost' => 29.99,
            'description' => '30 minutes',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'spa1.png'
        ]);

        Spa::create([
            'name' => 'Saloon package 2',
            'slug' => 'Saloon package 2',
            'details' => 'Power 2.0',
            'price' => 60.00,
            'shipping_cost' => 19.99,
            'description' => '45 minutes',
            'category_id' => 5,
            'brand_id' => 6,
            'image_path' => 'spa2.png'
        ]);

        Spa::create([
            'name' => 'Saloon package 3',
            'slug' => 'Saloon package 3',
            'details' => 'Power 3.0',
            'price' => 80.00,
            'shipping_cost' => 80.00,
            'description' => '60 Minutes',
            'category_id' => 6,
            'brand_id' => 6,
            'image_path' => 'spa3.png'
        ]);

        Spa::create([
            'name' => 'Saloon package 4',
            'slug' => 'Saloon package 4',
            'details' => 'Power 4.0',
            'price' => 100.00,
            'shipping_cost' => 1.89,
            'description' => '90 minutes',
            'category_id' => 7,
            'brand_id' => 7,
            'image_path' => 'spa4.jpg'
        ]);

    }
}