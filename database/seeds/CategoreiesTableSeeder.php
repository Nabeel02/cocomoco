<?php

use Illuminate\Database\Seeder;

class CategoreiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('categories')->insert([
                'name' => 'Milk Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Dark Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'White Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Coacao Powder',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Raw Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Compound Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Modeling Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Ruby Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Quasi Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
            DB::table('categories')->insert([
                'name' => 'Example Choclate',
                'category_image' => 'assets/product/product-3.jpg',
                'category_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, facere. Dolores, porro.'
            ]);
    }
}
