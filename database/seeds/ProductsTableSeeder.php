<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Spa Package 1',
            'slug' => 'Spa Package 1',
            'details' => 'Power 1.0',
            'price' => 150.00,
            'shipping_cost' => 5,
            'description' => '30 Minutes',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'spa1.png'
        ]);

        Product::create([
            'name' => 'Spa Package 2',
            'slug' => 'Spa Package 2',
            'details' => 'Power 2.0',
            'price' => 200.00,
            'shipping_cost' => 19.99,
            'description' => '45 Minutes',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'spa2.png'
        ]);

        Product::create([
            'name' => 'Spa Package 3',
            'slug' => 'Spa Package 3',
            'details' => 'Power 3.0',
            'price' => 250.00,
            'shipping_cost' => 14.99,
            'description' => '60 Minutes',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'spa3.png'
        ]);

        Product::create([
            'name' => 'Spa Package 4',
            'slug' => 'Spa Package 4',
            'details' => 'Power 4.0',
            'price' => 300.00,
            'shipping_cost' => 1.89,
            'description' => '90 Minutes',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'spa4.jpg'
        ]);

    }
}
