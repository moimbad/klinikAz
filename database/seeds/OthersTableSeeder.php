<?php

use App\Other;
use Illuminate\Database\Seeder;

class OthersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Other::create([
            'name' => 'Bekam',
            'slug' => 'Bekam',
            'details' => 'Cup',
            'price' => 60,
            'shipping_cost' => 29.99,
            'description' => '40 minutes',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'others1.png'
        ]);

        Other::create([
            'name' => 'Sauna',
            'slug' => 'Sauna',
            'details' => 'Infrared Sauna',
            'price' => 20,
            'shipping_cost' => 19.99,
            'description' => '30 minutes',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'others2.png'
        ]);

        Other::create([
            'name' => 'Urutan DTM',
            'slug' => 'Urutan DTM',
            'details' => 'Urutan Tisu Dalam',
            'price' => 25,
            'shipping_cost' => 14.99,
            'description' => '20 minutes',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'others3.png'
        ]);

        Other::create([
            'name' => 'Akupuntur',
            'slug' => 'Akupuntur',
            'details' => 'Akupuntur Kosmetik',
            'price' => 40,
            'shipping_cost' => 1.89,
            'description' => '35 minutes',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'others4.png'
        ]);

    }
}