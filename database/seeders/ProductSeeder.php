<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Watch',
            'price' => 250,
            'description' => 'Good watch',
            'image' => 'https://i.pinimg.com/736x/22/8b/33/228b33f4ad6648fad65d451bf42c888f.jpg'
        ]);
        Product::create([
            'name' => 'Bag',
            'price' => 350,
            'description' => 'Good Bag',
            'image' => 'https://i.pinimg.com/736x/22/8b/33/228b33f4ad6648fad65d451bf42c888f.jpg'
        ]);
        Product::create([
            'name' => 'perfume',
            'price' => 100,
            'description' => 'Good perfume',
            'image' => 'https://i.pinimg.com/736x/77/04/d1/7704d155f6deb52fcc4a9cb1c97ceb06.jpg'
        ]);
    }
}