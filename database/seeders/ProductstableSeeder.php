<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Bubble tapioka Iron Fist',
            'details' => 'fraise',
            'price' => 7,
            'description' => 'Mélangé des fruits rouges (comme des framboises, des fraises et des mûres) avec du thé vert et des perles de tapioca ',
            'image_path' => 'https://i.pinimg.com/736x/18/df/d3/18dfd345cb31d6db4a3647ead7b7a070.jpg'
            ]);

        Product::create([
            'name' => 'Bubble Jessica Jones',
            'details' => 'Fraise',
            'price' => 8,
            'description' => 'Mélangé des fruits rouges (comme des framboises, des fraises et des mûres) avec du thé vert et des perles de tapioca ',
            'image_path' => 'https://i.pinimg.com/736x/50/3e/42/503e42e21a0c265a38802045b278c662.jpg'
        ]);

        Product::create([
            'name' => 'Bubble Scarlet ',
            'details' => 'framboise',
            'price' => 8,
            'description' => 'Mélangé des fruits rouges (comme des framboises, des fraises ) avec du thé vert et des perles de tapioca',
            'image_path' => 'https://i.pinimg.com/736x/6f/22/9c/6f229c5a00cb49aa6d32f4d8c03dd2ef.jpg '
        ]);

        Product::create([
            'name' => 'Bubble Vision',
            'details' => 'milk',
            'price' => 7,
            'description' => 'lait de coco et perles de tapioca : Une combinaison parfumée et crémeuse',
            'image_path' => 'https://i.pinimg.com/736x/36/b9/66/36b966cfb5b5c80059b5971b1237e4e0.jpg '
        ]);

        Product::create([
            'name' => 'Bubble Black Panther',
            'details' => 'green',
            'price' => 7.5,
            'description' => 'Mélangé avec du thé vert ,de la confiture de bleuets et du lait et des billes de tapioca ',
            'image_path' => 'https://i.pinimg.com/originals/16/4a/98/164a98a5db22e418b3fbe5985c33fb8b.png '
        ]);

        Product::create([
            'name' => 'Bubble  Deadpool',
            'details' => 'blue',
            'price' => 7.5,
            'description' => 'Mélangé avec du thé vert ,de la confiture de bleuets et du lait et des billes de tapioca',
            'image_path' => 'https://i.pinimg.com/originals/da/90/95/da9095ec23587ecb279b7e18e6397e57.png'
        ]);

        Product::create([
            'name' => 'Bubble  Wolverine',
            'details' => 'violet',
            'price' => 8,
            'description' => 'Expérimentez avec des thés asiatiques comme le thé au jasmin ou le thé matcha. Ajoutez du lait et les perles de tapioca',
            'image_path' => 'https://i.pinimg.com/736x/5e/4b/8a/5e4b8a9a13c2412c151bfac8f958d796.jpg'
        ]);

    }
}